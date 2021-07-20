<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $allPL = DB::table('productlines')->get()->toArray();
        $allPLTitle = array_column($allPL, 'product_line');

        return [
            'product_code' => $this->faker->ean8 (),
            'product_name' => $this->faker->name(),
            'product_line' => $allPLTitle[array_rand($allPLTitle, 1)], // ko đc random -> phai lay tu bang productline
            'product_scale' => Str::random(100),
            'product_vendor' => $this->faker->company(),
            'product_description' => $this->faker->text($maxNbChars = 200),
            'quantity_inStock' => $this->faker->randomNumber(5),
            'buy_price' => $this->faker->randomNumber(6, 2),
            'MSRP' => $this->faker->realText(),


        ];
    }
}

