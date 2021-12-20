<?php

namespace Database\Factories;

use App\Models\Profskill;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfskillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profskill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
                'percent' => rand(1,99),
                'user_id'=>rand(1,5),
        ];
    }
}
