<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'mensaje' => $this->faker->name(),
            'about' => $this->faker->text(),
            'about_title' => $this->faker->name(),
            'about_button' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'slug' => $this->faker->word(),
            'what_title' => $this->faker->name(),
            'title_job'=> $this->faker->text,
            'tel'=>'+556256624566',
            'address'=>$this->faker->address,
            'excerpt'=>$this->faker->text,
            'email_verified_at' => now(),
            'password' => '$2a$12$gMfFMMSdjyFBfqRDtu5bOumIoFXH0hubnuNUT2Rs5rBWXPocCVoYu', // clave1234
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (! Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
