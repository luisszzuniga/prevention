<?php

namespace Tests\Unit;

use App\Models\Offer;
use Tests\TestCase;

class ControllerOffersTest extends TestCase
{
    public function testOffersPageIsDisplayedCorrectly()
    {
        $response = $this->get('/offers');
        $response->assertStatus(200);
        $response->assertSee('Suivre les formations des stagiaires dans leur SIRH');
    }
}
