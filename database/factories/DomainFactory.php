<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DomainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namaDomain' => $this->faker->domainName,
            'host_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
