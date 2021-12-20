<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;
use App\Models\User;
use App\Models\Skill;
use App\Models\Profskill;
use App\Models\Work;
use App\Models\post;
use App\Models\featuredProjects;
use App\Models\Redes;
use App\Models\whatido;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create()->each(function ($user) {
            $user->assignRole('client');
        });
        Skill::factory(25)->create();
        Education::factory(18)->create();
        Profskill::factory(25)->create();
        Work::factory(20)->create();
        post::factory(10)->create();
        featuredProjects::factory(20)->create();
        whatido::factory(10)->create();
        Redes::factory(10)->create();
        
    }
}
