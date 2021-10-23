<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;
use App\Models\User;
use App\Models\Skill;
use App\Models\skillsProfessional;
use App\Models\works;
use App\Models\post;
use App\Models\featuredProjects;
use App\Models\whatIdo;
class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Skill::factory(25)->create();
        Education::factory(18)->create();
        skillsProfessional::factory(30)->create();
        works::factory(20)->create();
        post::factory(10)->create();
        featuredProjects::factory(20)->create();
        whatIdo::factory(10)->create();
    }
}
