<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $processingStatus = [
            Order::PROCESSING_STATUS_AUDITED,
            Order::PROCESSING_STATUS_AUDITED,
            Order::PROCESSING_STATUS_NULLIFIED,
        ];
        return [
            'customer_id'         => $this->faker->randomDigitNotNull,
            'customer_contact_id' => $this->faker->randomDigitNotNull,
            'company'             => $this->faker->company . $this->faker->companySuffix,
            'no'                  => $this->faker->bothify('?????-#####'),
            'po'                  => $this->faker->bothify('?????-#####'),
            'currency'            => $this->faker->currencyCode,
            'exchange_rate'       => $this->faker->randomFloat(2, 1, 99999),
            'commission'          => $this->faker->randomFloat(2, 1, 99999),
            'rebate'              => $this->faker->randomFloat(2, 1, 100),
            'sea_freight'         => $this->faker->randomFloat(2, 1, 99999),
            'profit_margin'       => $this->faker->randomFloat(2, 1, 100),
            'total_amount'        => $this->faker->randomFloat(2, 1, 99999),
            'actual_total_amount' => $this->faker->randomFloat(2, 1, 99999),
            'pol'                 => $this->faker->word,
            'pod'                 => $this->faker->word,
            'valuation_clause'    => $this->faker->word,
            'processing_status'   => $this->faker->randomElement($processingStatus),
            'remarks'             => $this->faker->realText(),
            'delivered_at'        => $this->faker->dateTimeThisDecade('+3 months'),
        ];
    }
}
