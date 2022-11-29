<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        $reference_code = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];

        return [
            'reference_code' => $reference_code,
            'amount' => 10000,
            'account_id' => $this->faker->randomElement([10, 11]),
            'status' => $this->faker->randomElement(['pending', 'success', 'declined']),
            'tenant_id' => 11
        ];
    }
}
