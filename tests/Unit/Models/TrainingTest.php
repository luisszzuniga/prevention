<?php

namespace Models;

use App\Models\Center;
use App\Models\Course;
use App\Models\Offer;
use App\Models\Training;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
     * Test trainingsLearners relation.
     *
     * @return void
     */
    public function test_trainingsLearners_relation(): void
    {
        $user = User::factory()->create();
        $training = Training::factory()->create(['user_id_learner' => $user->id]);

        $this->assertInstanceOf(User::class, $training->learner);
        $this->assertEquals($user->id, $training->learner->id);
    }

    /**
     * Test trainingsTrainers relation.
     *
     * @return void
     */
    public function test_trainingsTrainers_relation(): void
    {
        $user = User::factory()->create();
        $training = Training::factory()->create(['user_id_trainer' => $user->id]);

        $this->assertInstanceOf(User::class, $training->trainer);
        $this->assertEquals($user->id, $training->trainer->id);
    }

    /**
     * Test courses relation.
     *
     * @return void
     */
    public function test_courses_relation(): void
    {
        $training = Training::factory()->create();
        $course = Course::factory()->create(['training_id' => $training->id]);

        $this->assertInstanceOf(Course::class, $training->courses->first());
        $this->assertEquals($course->id, $training->courses->first()->id);
    }

}
