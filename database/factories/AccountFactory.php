<?php

namespace Database\Factories;

use App\Models\Tenant;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        return [
            'account_number' => str_shuffle($pin),
            'open_date' => Carbon::now(),
            'tenant_id' => Tenant::factory()->create()
        ];
    }
}
