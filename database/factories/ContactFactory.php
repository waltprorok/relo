<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'status' => 'own',
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber(),
            'current_zip_code' => $this->faker->numerify('#####'),
            'moving_to_city' => 'Orlando, FL',
            'message' =>  $this->faker->text(250),
            'replied' => false,
        ];
    }
}
