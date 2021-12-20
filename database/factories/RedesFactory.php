<?php

namespace Database\Factories;

use App\Models\Redes;
use Illuminate\Database\Eloquent\Factories\Factory;

class RedesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Redes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'url' => $this->faker->url,
                
                'user_id'=>rand(1,5),
        ];
    }
}
