<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\GphContracts;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GphContracts>
 */
class GphContractsFactory extends Factory
{

    protected $model = GphContracts::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => Str::random(5),
            'surname' => $this->faker->firstName(),
            'name' => $this->faker->lastName(),
            'patronymic' => $this->faker->lastName(),
            'contract_subject' => Str::random(40),
            'beginning' => $this->faker->dateTimeBetween('-50 days', '+100 days'),
            'number' => Str::random(10),
        ];
    }
}
