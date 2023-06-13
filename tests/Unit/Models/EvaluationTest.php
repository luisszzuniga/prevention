<?php

namespace Models;

use App\Models\Evaluation;
use App\Models\Theme;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EvaluationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fillable attributes.
     *
     * @return void
     */
    public function test_fillable_attributes(): void
    {
        $evaluation = new Evaluation([
            'note' => 'A',
        ]);

        $this->assertEquals('A', $evaluation->note);
    }

    /**
     * Test theme relation.
     *
     * @return void
     */
    public function test_theme_relation(): void
    {
        $theme = Theme::factory()->create();
        $evaluation = Evaluation::factory()->create(['theme_id' => $theme->id]);

        $this->assertInstanceOf(Theme::class, $evaluation->theme);
        $this->assertEquals($theme->id, $evaluation->theme->id);
    }

}



