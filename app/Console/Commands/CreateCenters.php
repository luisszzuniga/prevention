<?php

namespace App\Console\Commands;

use App\Models\Center;
use Exception;
use Illuminate\Console\Command;

class CreateCenters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:centers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Centers for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $startTime = microtime(true);
        try {
            // Code to create centers
            $timeElapsed = round((microtime(true) - $startTime) * 1000);
            $this->line(str_pad($this->signature, 140, '.') . $timeElapsed . 'ms', 'comment');
            $this->info(' DONE');
        } catch (Exception $e) {
            $this->error('wrong');
        }
        return 0;
    }

}
