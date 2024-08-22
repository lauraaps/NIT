<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'age' => $this->faker->numberBetween(18, 65),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'summary' => $this->faker->text,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // senha padrão
            'remember_token' => Str::random(10),
        ];
    }
}
