<?php

namespace Tests\Unit\Models;

use App\Models\Course;
use App\Models\Criterion;
use App\Models\Grid;
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
        $grid = Grid::factory()->create();
        $course = Course::factory()->create(['grid_id' => $grid->id]);

        $criterion->grids()->attach($grid->id);

        $this->assertInstanceOf(Course::class, $criterion->grids->first()->courses->first());
        $this->assertEquals($course->id, $criterion->grids->first()->courses->first()->id);
    }

    /**
     * Test grids relation.
     *
     * @return void
     */
    public function test_grids_relation(): void
    {
        $criterion = Criterion::factory()->create();
        $grid = Grid::factory()->create();

        $criterion->grids()->attach($grid->id);

        $this->assertInstanceOf(Grid::class, $criterion->grids->first());
        $this->assertEquals($grid->id, $criterion->grids->first()->id);
    }

}

