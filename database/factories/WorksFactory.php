<?php

namespace Database\Factories;

use App\Models\works;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = works::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'work_name'=>$this->faker->name,
            'lugar'=>$this->faker->name,
            'tareas'=>$this->faker->text,
            'start_date'=>$this->faker->date,
            'finish_date'=>$this->faker->date,
            'user_id'=>rand(1,5),
        ];
    }
}
