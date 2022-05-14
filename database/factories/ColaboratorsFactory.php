<?php

namespace Database\Factories;

use App\Models\Colaborators;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ColaboratorsFactory extends Factory
{

    protected $model = Colaborators::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'surname' => $this->faker->firstName(),
            'name' => $this->faker->lastName(),
            'patronymic' => $this->faker->lastName(),
            'department' => Str::random(10),
            'position' => Str::random(10),
            'contract' => Str::random(10),
            'address' => $this->faker->address,
            'telefone' => $this->faker->phoneNumber,
            'characteristic' => Str::random(30),
        ];
    }
}
