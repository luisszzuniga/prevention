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
    protected $signature = 'create:courses {count}';

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
        $numberOfCourses = $this->argument('count');

        $criteria = Criterion::factory(10)->create();
        Course::factory(10)->create()->each(function ($course) use ($criteria) {
            $course->criteria()->attach($criteria->random(2));
        });

        for ($i = 0; $i < $numberOfCourses; $i++) {
            Course::factory()->create();
        }

        return 0;
    }
}
