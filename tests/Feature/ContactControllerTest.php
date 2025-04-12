<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
        $response = $this->get('/contact/create');

        $response->assertOk();
    }

    public function test_contact_page_route_200()
    {
        $response = $this->get(route('contact.create'));

        $response->assertOk();
    }

    public function test_contact_factory()
    {
        Contact::factory()->count(5)->create();

        $this->assertDatabaseCount('contacts', 5);
    }

    public function test_contact_create_success()
    {
        config()->set('honeypot.enabled', false);

        $this->post(route('contact.store'), [
            'name' => 'Test Name',
            'status' => 'rent',
            'email' => 'test@domain.com',
            'phone' => '800-123-1234',
            'current_zip_code' => '12345',
            'moving_to_city' => 'Pittsburgh, PA',
            'message' => 'Test Message',
            'replied' => false,
        ]);

        $contact = Contact::first();

        $this->assertDatabaseCount('contacts', 1);

        $this->assertDatabaseHas('contacts', [
            'name' => $contact->name,
            'status' => $contact->status,
            'email' => $contact->email,
            'phone' => $contact->phone,
            'current_zip_code' => $contact->current_zip_code,
            'moving_to_city' => $contact->moving_to_city,
            'message' => $contact->message,
            'replied' => $contact->replied,
        ]);
    }
}
