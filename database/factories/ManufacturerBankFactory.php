<?php

namespace Database\Factories;

use App\Models\ManufacturerBank;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManufacturerBankFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ManufacturerBank::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'currency' => $this->faker->currencyCode,
            'account_name' => $this->faker->name,
            'account_number' => $this->faker->creditCardNumber,
            'account_bank' => $this->faker->creditCardType,
            'bank_address' => $this->faker->address,
            'company_address' => $this->faker->address,
        ];
    }
}
