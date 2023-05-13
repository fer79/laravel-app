<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

# Models
use App\Models\contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = contact::class;

    public function definition()
    {
        return [
          'name' => $this->faker->name(),
          'email' => $this->faker->unique()->safeEmail(),
          'phone' => $this->faker->randomNumber(7),
          'company' => $this->faker->realText(30),
          'messege' => $this->faker->text(150),
        ];
    }
}
