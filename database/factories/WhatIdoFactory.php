<?php

namespace Database\Factories;

use App\Models\whatIdo;
use Illuminate\Database\Eloquent\Factories\Factory;

class WhatIdoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = whatIdo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'=>$this->faker->title,
            'descripcion'=>$this->faker->text,
            'user_id'=>rand(1,5),
        ];
    }
}
