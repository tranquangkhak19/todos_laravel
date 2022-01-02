<?php

namespace Database\Factories;
use App\Models\Model;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Genrator as Faker;

// $factory->define(\App\Todo::class, function (Faker $faker){
//     return [
//         'name' => $faker->sentence(3),
//         'description' => $faker->paragraph(4),
//         'completed'=> false
//     ];
// });

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Todo::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(4),
            'completed'=> false
        ];
    }
}


