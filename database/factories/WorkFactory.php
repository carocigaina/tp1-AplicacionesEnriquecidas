<?php

namespace Database\Factories;

use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Work::class;

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
