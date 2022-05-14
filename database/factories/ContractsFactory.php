<?php

namespace Database\Factories;

use App\Models\Contracts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contracts>
 */
class ContractsFactory extends Factory
{

    protected $model = Contracts::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employer' => Str::random(20),
            'contract_subject' => Str::random(40),
            'code' => Str::random(5),
            'beginning' => $this->faker->dateTimeBetween('-3650 days', '-1000 days'),
            'deadline' => $this->faker->dateTimeBetween('-900 days', '+1000days'),
            'number' => Str::random(10),
        ];
    }
}
