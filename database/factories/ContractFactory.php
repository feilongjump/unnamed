<?php

namespace Database\Factories;

use App\Models\Contract;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contract::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'manufacturer_id' => $this->faker->randomDigitNotNull,
            'manufacturer_contact_id' => $this->faker->randomDigitNotNull,
            'company' => $this->faker->company . $this->faker->companySuffix,
            'merchandiser_id' => $this->faker->randomDigitNotNull,
            'purchaser_id' => $this->faker->randomDigitNotNull,
            'order_no' => $this->faker->bothify('?????-#####'),
            'purchaser_no' => $this->faker->bothify('?????-#####'),
            'currency' => $this->faker->currencyCode,
            'exchange_rate' => $this->faker->randomFloat(2, 1, 99999),
            'total_amount' => $this->faker->randomFloat(2, 1, 99999),
            'valuation_clause' => $this->faker->word,
            'payment_account' => $this->faker->creditCardNumber,
            'purchase_method' => $this->faker->word,
            'invoice_type' => $this->faker->word,
            'contract_type' => $this->faker->randomKey(Contract::$contractTypeMap),
            'processing_status' => $this->faker->randomKey(Contract::$processingStatusMap),
            'remarks' => $this->faker->realText(),
            'delivered_at' => $this->faker->dateTimeThisDecade('+3 months'),
            'purchased_at' => $this->faker->dateTimeThisDecade('+3 months'),
        ];
    }
}
