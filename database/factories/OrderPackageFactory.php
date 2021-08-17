<?php

namespace Database\Factories;

use App\Models\OrderPackage;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderPackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderPackage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'manufacturer_id' => $this->faker->randomDigitNotNull,
            'no'          => $this->faker->bothify('?????-#####'),
            'name'            => $this->faker->word,
            'spec'            => $this->faker->word,
            'rate'            => $this->faker->randomFloat(2, 0, 100),
            'quantity'        => $this->faker->randomNumber(),
            'unit_price'      => $this->faker->randomFloat(2, 1, 99999),
            'remarks'         => $this->faker->realText(),
        ];
    }
}
