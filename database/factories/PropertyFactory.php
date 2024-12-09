<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Property::class;

     
     public function definition()
     {
         return [
             'title' => $this->faker->words(3, true),
             'description' => $this->faker->paragraph(),
             'price' => $this->faker->randomFloat(2, 100000, 1000000), 
             'location' => $this->faker->address,
             'bedrooms' => $this->faker->numberBetween(1, 5),
             'bathrooms' => $this->faker->numberBetween(1, 4),
             'size' => $this->faker->numberBetween(50, 500), 
             'available' => $this->faker->boolean(80), 
             'imageUrl' => 'https://dummyimage.com/300'
         ];
     }
}
