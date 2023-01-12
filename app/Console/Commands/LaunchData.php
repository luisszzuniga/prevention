<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LaunchData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('create:roles');
        $this->call('create:companies');
        $this->call('create:vehicles');
        $this->call('create:features');
        $this->call('create:offers');
        $this->call('create:progress');
        $this->call('create:evaluations');
        $this->call('create:themes');
        $this->call('create:criteria');
        $this->call('create:users');
        $this->call('create:courses');
    }
}
