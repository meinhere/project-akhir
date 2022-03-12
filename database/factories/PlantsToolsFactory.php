<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlantsToolsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plant_id' => mt_rand(1, 4),
            'tool_id' => mt_rand(1, 4),
        ];
    }
}
