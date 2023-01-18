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
    protected $signature = 'create:evaluations';

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
        return 0;
    }
}
