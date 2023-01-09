<?php

namespace App\Console\Commands;


use App\Models\Criterion;
use App\Models\Theme;
use Illuminate\Console\Command;

class CreateCriteria extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:criteria {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Criteria for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfCriteria = $this->argument('count');



        $themes = Theme::factory(10)->create();
        Criterion::factory(10)->create()->each(function ($criterion) use ($themes) {
            $criterion->themes()->attach($themes->random(2));
        });

        for ($i = 0; $i < $numberOfCriteria; $i++) {
            Criterion::factory()->create();
        }

        return 0;
    }
}
