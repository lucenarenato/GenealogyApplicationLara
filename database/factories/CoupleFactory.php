<?php

namespace Database\Factories;

use App\Couple;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CoupleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Couple::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'         => $this->faker->uuid,
            'husband_id' => function () {
                return factory(User::class)->states('male')->create()->id;
            },
            'wife_id'    => function () {
                return factory(User::class)->states('female')->create()->id;
            },
            'manager_id' => function () {
                return factory(User::class)->create()->id;
            },
        ];
    }
}
