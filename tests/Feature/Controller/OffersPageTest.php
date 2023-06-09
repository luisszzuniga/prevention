<?php

namespace Controller;

use Tests\TestCase;

class OffersPageTest extends TestCase
{
    /**
     * Test the offers page.
     *
     * @return void
     */
    public function test_offers_page_is_displayed_correctly(): void
    {
        $response = $this->get('/offers');

        $response->assertStatus(200);
        $response->assertViewIs('offers');
    }
}

