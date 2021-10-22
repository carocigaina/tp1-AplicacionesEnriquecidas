<?php

namespace Database\Factories;

use App\Models\featuredProjects;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeaturedProjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = featuredProjects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoria'=>$this->faker->name,
            'titulo'=>$this->faker->name,
            
            'puesto'=>$this->faker->name,
            'descripcion'=>$this->faker->text,
            'user_id'=>rand(1,5),
        ];
    }
}
