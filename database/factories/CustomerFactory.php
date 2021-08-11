<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name'           => $this->faker->company . $this->faker->companySuffix,
            'category'       => $this->faker->word,
            'grade'          => $this->faker->numberBetween(1, 5),
            'currency'       => $this->faker->currencyCode,
            'payment_method' => $this->faker->creditCardType,
            'address'        => $this->faker->address,
            'remarks'        => $this->faker->realText(),
        ];
    }
}
