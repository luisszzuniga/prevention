<?php

namespace Models;

use App\Models\Criterion;
use App\Models\Evaluation;
use App\Models\Progress;
use App\Models\Theme;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThemeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fillable attributes.
     *
     * @return void
     */
    public function test_fillable_attributes(): void
    {
        $theme = new Theme([
            'text' => 'Test Text',
        ]);

        $this->assertEquals('Test Text', $theme->text);
    }

    /**
     * Test criteria relation.
     *
     * @return void
     */
    public function test_criteria_relation(): void
    {
        $theme = Theme::factory()->create();
        $criterion = Criterion::factory()->create();

        $theme->criteria()->attach($criterion->id);

        $this->assertInstanceOf(Criterion::class, $theme->criteria->first());
        $this->assertEquals($criterion->id, $theme->criteria->first()->id);
    }

    /**
     * Test evaluations relation.
     *
     * @return void
     */
    public function test_evaluations_relation(): void
    {
        $theme = Theme::factory()->create();
        $evaluation = Evaluation::factory()->create(['theme_id' => $theme->id]);

        $this->assertInstanceOf(Evaluation::class, $theme->evaluation);
        $this->assertEquals($evaluation->id, $theme->evaluation->id);
    }

    /**
     * Test progress relation.
     *
     * @return void
     */
    public function test_progress_relation(): void
    {
        $theme = Theme::factory()->create();
        $progress = Progress::factory()->create(['theme_id' => $theme->id]);

        $this->assertInstanceOf(Progress::class, $theme->progress);
        $this->assertEquals($progress->id, $theme->progress->id);
    }

}


