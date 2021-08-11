<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManufacturerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manufacturer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->bothify('?????-#####'),
            'name' => $this->faker->word,
            'category' => $this->faker->word,
            'address' => $this->faker->address,
            'remarks' => $this->faker->realText(),
        ];
    }
}
