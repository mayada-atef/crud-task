<?php

namespace Database\Factories;
use Faker\Factory as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {  $faker = Faker::create('en_GB');
        return [
            'fname'=>fake()->name(),
            'lname'=>fake()->name(),
            'email'=>fake()->unique()->safeEmail(),
            'phone'=>$faker->phoneNumber,
           
            
        ];
    }
}
