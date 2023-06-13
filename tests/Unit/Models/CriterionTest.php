<?php

namespace Models;

use App\Models\Course;
use App\Models\Criterion;
use App\Models\Theme;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CriterionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fillable attributes.
     *
     * @return void
     */
    public function test_fillable_attributes(): void
    {
        $criterion = new Criterion([
            'text' => 'Test Text',
        ]);

        $this->assertEquals('Test Text', $criterion->text);
    }

    /**
     * Test courses relation.
     *
     * @return void
     */
    public function test_courses_relation(): void
    {
        $criterion = Criterion::factory()->create();
        $course = Course::factory()->create();

        $criterion->courses()->attach($course->id);

        $this->assertInstanceOf(Course::class, $criterion->courses->first());
        $this->assertEquals($course->id, $criterion->courses->first()->id);
    }

    /**
     * Test themes relation.
     *
     * @return void
     */
    public function test_themes_relation(): void
    {
        $criterion = Criterion::factory()->create();
        $theme = Theme::factory()->create();

        $criterion->themes()->attach($theme->id);

        $this->assertInstanceOf(Theme::class, $criterion->themes->first());
        $this->assertEquals($theme->id, $criterion->themes->first()->id);
    }

}

