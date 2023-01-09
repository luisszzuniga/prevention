<?php

namespace App\Console\Commands;

use App\Models\Evaluation;
use Illuminate\Console\Command;

class CreateEvaluations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:evaluations {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Evaluations for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfEvaluations = $this->argument('count');

        for ($i = 0; $i < $numberOfEvaluations; $i++) {
            Evaluation::factory()->create();
        }

        return 0;
    }
}
