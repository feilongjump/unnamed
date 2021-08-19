<?php

namespace Database\Factories;

use App\Models\OrderMark;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderMarkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderMark::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'front' => [
                'text' => $this->faker->text,
                'images' => [ $this->faker->imageUrl ]
            ],
            'side' => [
                'text' => $this->faker->text,
                'images' => [ $this->faker->imageUrl ]
            ],
            'inner_box' => [
                'text' => $this->faker->text,
                'images' => [ $this->faker->imageUrl ]
            ],
        ];
    }
}
