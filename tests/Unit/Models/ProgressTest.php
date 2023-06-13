<?php

namespace Models;

use App\Models\Progress;
use App\Models\Theme;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProgressTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fillable attributes.
     *
     * @return void
     */
    public function test_fillable_attributes(): void
    {
        $progress = new Progress([
            'text' => 'Progress description',
        ]);

        $this->assertEquals('Progress description', $progress->text);
    }

    /**
     * Test theme relation.
     *
     * @return void
     */
    public function test_theme_relation(): void
    {
        $theme = Theme::factory()->create();
        $progress = Progress::factory()->create(['theme_id' => $theme->id]);

        $this->assertInstanceOf(Theme::class, $progress->theme);
        $this->assertEquals($theme->id, $progress->theme->id);

        // Check the reverse relation from Theme to Progress
        $this->assertInstanceOf(Progress::class, $theme->progress);
        $this->assertEquals($progress->id, $theme->progress->id);
    }

}



