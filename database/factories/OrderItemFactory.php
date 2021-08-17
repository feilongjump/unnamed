<?php

namespace Database\Factories;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'manufacturer_id' => $this->faker->randomDigitNotNull,
            'no' => $this->faker->bothify('?????-#####'),
            'customer_no' => $this->faker->bothify('?????-#####'),
            'po_no' => $this->faker->bothify('?????-#####'),
            'name' => $this->faker->word,
            'english_name' => $this->faker->word,
            'brand' => $this->faker->word,
            'packing_method' => $this->faker->word,
            'inner' => $this->faker->word,
            'intermediate' => $this->faker->word,
            'outer' => $this->faker->word,
            'composition_mode' => $this->faker->word,
            'quantity' => $this->faker->randomNumber(),
            'quote_unit' => $this->faker->word,
            'unit_price' => $this->faker->randomFloat(2, 1, 99999),
            'profit_margin' => $this->faker->randomFloat(2, 1, 99999),
            'factory_quoted' => $this->faker->randomFloat(2, 1, 99999),
            'tax_rebate_rate' => $this->faker->randomFloat(2, 1, 99999),
            'tax_rate' => $this->faker->randomFloat(2, 1, 99999),
            'price_excluding_tax' => $this->faker->randomFloat(2, 1, 99999),
            'place_of_delivery' => $this->faker->address,
            'material_quality' => $this->faker->randomFloat(2, 1, 99999),
            'fob' => $this->faker->randomFloat(2, 1, 99999),
            'fob_cost' => $this->faker->randomFloat(2, 1, 99999),
            'fob_fee' => $this->faker->randomFloat(2, 1, 99999),
            'quotation_benchmark' => $this->faker->word,
            'product_factory_price' => $this->faker->randomFloat(2, 1, 99999),
            'direct_cost' => $this->faker->randomFloat(2, 1, 99999),
            'component_cost' => $this->faker->randomFloat(2, 1, 99999),
            'packaging_cost' => $this->faker->randomFloat(2, 1, 99999),
            'other_cost' => $this->faker->randomFloat(2, 1, 99999),
            'sea_freight' => $this->faker->randomFloat(2, 1, 99999),
            'commission' => $this->faker->randomFloat(2, 1, 99999),
            'product_cbm' => $this->faker->randomFloat(2, 1, 99999),
            'cbm_box' => $this->faker->randomFloat(2, 1, 99999),
            'net_weight' => $this->faker->randomFloat(2, 1, 99999),
            'net_weight_box' => $this->faker->randomFloat(2, 1, 99999),
            'gross_weight' => $this->faker->randomFloat(2, 1, 99999),
            'gross_weight_box' => $this->faker->randomFloat(2, 1, 99999),
            'weight' => $this->faker->randomFloat(2, 1, 99999),
            'unit_of_weight' => $this->faker->word,
            'moq' => $this->faker->randomNumber(),
            'factory_delivery_time' => $this->faker->dateTimeThisDecade('+3 months'),
            'customer_delivery_time' => $this->faker->dateTimeThisDecade('+3 months'),
        ];
    }
}
