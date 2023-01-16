<?php

namespace App\Console\Commands;

use App\Models\Course;
use App\Models\Criterion;
use Illuminate\Console\Command;

class CreateCourses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:courses';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Courses for your App';

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
