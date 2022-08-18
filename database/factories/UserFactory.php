<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    /*public function withFaker()
    {
        return Factory::create('pt_BR');
    }*/

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        return [
            'id'         => $this->faker->uuid,
            'name' => $name,
            'nickname' => $name,
            'gender_id'  => rand(1, 2),
            'manager_id' => $this->faker->uuid,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
        ];
    }
}
