<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        return [
            //
            'product_name' => fake()->word() , 
            'description' => fake()->text() ,  
            'cost' => rand(1000, 100000),  
            'discount' => fake()->randomFloat(2 , 0,100) , 
            'category_id' => function(){
                $ids = Category::pluck('category_id')->toArray() ; 
                return $ids[rand(0 , count($ids) - 1 )] ; 
            } , 
        ];
    }
}
