<?php

namespace Tests\Unit\Models;

use App\Models\Center;
use App\Models\Course;
use App\Models\Grid;
use App\Models\Learner;
use App\Models\Offer;
use App\Models\Trainer;
use App\Models\Training;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class TrainingTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fillable attributes.
     *
     * @return void
     */
    public function test_fillable_attributes(): void
    {
        $training = new Training([
            'seance_code' => 'SC123',
        ]);

        $this->assertEquals('SC123', $training->seance_code);
    }

    /**
     * Test offer relation.
     *
     * @return void
     */
    public function test_offer_relation(): void
    {
        $offer = Offer::factory()->create();
        $training = Training::factory()->create(['offer_id' => $offer->id]);

        $this->assertInstanceOf(Offer::class, $training->offer);
        $this->assertEquals($offer->id, $training->offer->id);
    }

    /**
     * Test center relation.
     *
     * @return void
     */
    public function test_center_relation(): void
    {
        $center = Center::factory()->create();
        $training = Training::factory()->create(['center_id' => $center->id]);

        $this->assertInstanceOf(Center::class, $training->center);
        $this->assertEquals($center->id, $training->center->id);
    }

    /**
     * Test learners relation.
     *
     * @return void
     */
    public function test_a_learner_belongs_to_many_trainings()
    {
        // Create a learner
        $learner = Learner::factory()->create();
        echo 'Learner ID: ', $learner->user_id, PHP_EOL;  // Print the learner ID

        // Create two trainings
        $trainings = Training::factory()->count(2)->create();
        echo 'Training IDs: ', implode(', ', $trainings->pluck('id')->toArray()), PHP_EOL;  // Print the training IDs

        // Attach the trainings to the learner
        $learner->trainings()->attach($trainings);

        // Assert the learner has the expected trainings
        $this->assertEquals(2, $learner->trainings->count());
        $this->assertTrue($learner->trainings->contains($trainings[0]));
        $this->assertTrue($learner->trainings->contains($trainings[1]));
    }

    /**
     * Test trainingsTrainers relation.
     *
     * @return void
     */
    public function test_trainingsTrainers_relation(): void
    {
        $training = Training::factory()->create();
        $trainer = Trainer::factory()->create(['training_id' => $training->id]);

        $this->assertInstanceOf(Trainer::class, $training->trainer);
        $this->assertEquals($trainer->id, $training->trainer->id);
    }

    /**
     * Test courses relation.
     *
     * @return void
     */
    public function test_courses_relation(): void
    {
        $training = Training::factory()->create();
        $grid = Grid::factory()->create();
        $course = Course::factory()->create(['training_id' => $training->id, 'grid_id' => $grid->id]);

        $this->assertInstanceOf(Course::class, $training->courses->first());
        $this->assertEquals($course->id, $training->courses->first()->id);
    }

}
