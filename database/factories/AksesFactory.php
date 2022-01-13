<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AksesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idOrder'=> NULL,
            'idBrief' => NULL,
            'userAkses' => $this->faker->userName,
            'passAkses' => $this->faker->password,
            'domainAkses' => $this->faker->domainName,
            'host_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
