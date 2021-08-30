<?php

namespace Database\Factories;

use App\Models\ContractItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContractItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'contract_id' => $this->faker->randomDigitNotNull,
            'art_no' => $this->faker->bothify('?????-#####'),
            'no' => $this->faker->bothify('?????-#####'),
            'name' => $this->faker->word,
            'spec' => $this->faker->word,
            'quantity' => $this->faker->randomNumber(),
            'unit_price' => $this->faker->randomFloat(2, 1, 99999),
            'amount' => $this->faker->randomFloat(2, 1, 99999),
            'is_tax_included' => $this->faker->boolean,
            'tax_rate' => $this->faker->randomFloat(2, 1, 99999),
            'price_excluding_tax' => $this->faker->randomFloat(2, 1, 99999),
            'remarks' => $this->faker->realText(),
        ];
    }
}
