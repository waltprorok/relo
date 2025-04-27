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
            'phone' => $this->faker->numerify('###-###-####'),
            'current_zip_code' => $this->faker->numerify('#####'),
            'moving_to_city' => $this->faker->randomElement(['Orlando, FL', 'Chicago, IL', 'Pittsburgh, PA', 'Boston, MA']),
            'message' =>  $this->faker->text(250),
            'replied' => rand(0, 1),
            'created_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
