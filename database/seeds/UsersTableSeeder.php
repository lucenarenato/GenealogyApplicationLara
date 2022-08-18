<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;
use App\User;
use App\Couple;
use App\UserMetadata;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)->create();
        Couple::factory()->count(3)->create();
        UserMetadata::factory()->count(3)->create();
    }
}
