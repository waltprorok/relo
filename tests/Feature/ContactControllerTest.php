<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Mail::fake();
    }

    public function test_contact_page_url_200()
    {
        $response = $this->get('/');

        $response->assertOk();
    }

    public function test_contact_page_route_200()
    {
        $response = $this->get(route('contact.create'));

        $response->assertOk();
    }
}
