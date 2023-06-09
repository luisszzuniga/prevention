<?php

namespace Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    /**
     * Test the contact page.
     *
     * @return void
     */
    public function test_contact_page_can_be_rendered(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewIs('contact');
    }
}
