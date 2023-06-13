<?php

namespace Models;

use App\Models\Course;
use App\Models\Criterion;
use App\Models\Training;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fillable attributes.
     *
     * @return void
     */
    public function test_fillable_attributes(): void
    {
        $course = new Course([
            'observation' => 'Test Observation',
        ]);

        $this->assertEquals('Test Observation', $course->observation);
    }

    /**
     * Test criteria relation.
     *
     * @return void
     */
    public function test_criteria_relation(): void
    {
        $course = Course::factory()->create();
        $criterion = Criterion::factory()->create();

        $course->criteria()->attach($criterion->id);

        $this->assertInstanceOf(Criterion::class, $course->criteria->first());
        $this->assertEquals($criterion->id, $course->criteria->first()->id);
    }

    /**
     * Test training relation.
     *
     * @return void
     */
    public function test_training_relation(): void
    {
        $training = Training::factory()->create();
        $course = Course::factory()->create(['training_id' => $training->id]);

        $this->assertInstanceOf(Training::class, $course->training);
        $this->assertEquals($training->id, $course->training->id);
    }

}
