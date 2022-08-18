<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;
use App\User;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $find = User::where('name','Renato Lucena') -> first(); // User::where('name','like','%John%') -> first();

        if (empty($find)) {
            echo 'create my user';
            
            $user = User::create([
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), //Str::uuid()
                'name' => 'Renato Lucena',
                'nickname' => 'Renato Lucena',
                'gender_id'  => 1, //male
                'manager_id' => Str::uuid(),
                'birth_order' => 41,
                'email' => 'cpdrenato@gmail.com',
                'password' => bcrypt('password'), //'password' => bcrypt(Str::random(15)),
                'remember_token' => Str::random(10),
                'address' => 'Avenida Goias',
                'city' => 'Goiania'
            ]);
        } else {
            echo "Qtde: " . $find . " Records Inside Database!";
        }
        
    }
}
