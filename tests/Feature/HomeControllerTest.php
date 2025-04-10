<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_home_page_url_200()
    {
        $response = $this->get('/');

        $response->assertOk();
    }

    public function test_home_page_route_200()
    {
        $response = $this->get(route('home'));

        $response->assertOk();
    }
}
