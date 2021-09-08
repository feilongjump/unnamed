<?php

namespace Database\Factories;

use App\Models\Enquiry;
use Faker\Provider\Internet;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnquiryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enquiry::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // URL 在中文模式下无效
        // 手动增加 en 语言生成器
        $faker = \Faker\Factory::create('en');
        $this->faker->addProvider(new Internet($faker));

        return [
            'manufacturer_id' => $this->faker->randomDigitNotNull,
            'manufacturer_contact_id' => $this->faker->randomDigitNotNull,
            'art_no' => $this->faker->bothify('?????-#####'),
            'standard' => $this->faker->word,
            'pack' => $this->faker->word,
            'moq' => $this->faker->randomNumber(),
            'price' => $this->faker->randomFloat(2, 1, 99999),
            'website' => $this->faker->url,
            'delivered_at' => $this->faker->dateTimeThisDecade('+3 months')
        ];
    }
}
