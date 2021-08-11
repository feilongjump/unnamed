<?php

namespace Database\Factories;

use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Part::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'manufacturer_id' => $this->faker->randomDigitNotNull,
            'art_no' => $this->faker->bothify('?????-#####'),
            'no' => $this->faker->bothify('?????-#####'),
            'name' => $this->faker->word,
            'spec' => $this->faker->word,
            'rate' => $this->faker->randomFloat(2, 0, 100),
            'quantity' => $this->faker->randomNumber(),
            'unit_price' => $this->faker->randomFloat(2, 1, 99999),
            'cost_price' => $this->faker->randomFloat(2, 1, 99999),
            'price_formula' => $this->faker->sentence,
        ];
    }
}
