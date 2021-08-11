<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'manufacturer_id' => $this->faker->randomDigitNotNull,
            'no'              => $this->faker->bothify('?????-#####'),
            'name'            => $this->faker->name,
            'spec'            => $this->faker->word,
            'category'        => $this->faker->word,
            'unit'            => $this->faker->word,
            'unit_price'      => $this->faker->randomFloat(2, 1, 99999),
            'remarks'         => $this->faker->realText(),
        ];
    }
}
