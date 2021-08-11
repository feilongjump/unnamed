<?php

namespace Database\Factories;

use App\Models\Showpiece;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShowpieceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Showpiece::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'manufacturer_id' => $this->faker->randomDigitNotNull,
            'mo' => $this->faker->bothify('?????-#####'),
            'no' => $this->faker->bothify('?????-#####'),
            'name' => $this->faker->word,
            'english_name' => $this->faker->word,
            'spec' => $this->faker->word,
            'series' => $this->faker->word,
            'material' => $this->faker->word,
            'unit_price' => $this->faker->randomFloat(2, 1, 99999),
            'quoted_price' => $this->faker->randomFloat(2, 1, 99999),
            'tax_rebate_rate' => $this->faker->randomFloat(2, 0, 100),
            'describe' => $this->faker->realText(),
            'english_describe' => $this->faker->realText(),
            'pack_describe' => $this->faker->realText(),
            'english_pack_describe' => $this->faker->realText(),
            'remarks' => $this->faker->realText(),
        ];
    }
}
