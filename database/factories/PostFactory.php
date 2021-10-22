<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha'=>$this->faker->date,
            'titulo'=>$this->faker->title,
            
            'autor'=>$this->faker->name,
            'descripcion'=>$this->faker->text,
            'user_id'=>rand(1,5),
        ];
    }
}
