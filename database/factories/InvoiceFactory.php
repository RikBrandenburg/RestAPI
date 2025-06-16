<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['B', 'P', 'V']);

        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->numberBetween(100, 2000),
            'status' => $status,
            'billed_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'paid_date' => $status == 'P' ? $this->faker->dateTimeBetween('now', '+1 month') : null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
