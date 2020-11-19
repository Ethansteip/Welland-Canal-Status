<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'bridge_name' => $this->faker->randomElement(['Bridge 1', 'Bridge 2', 'Bridge 3', 'Bridge 4', 'bridge 5', 'Bridge 6', 'Bridge 7']),
            'bridge_status' => $this->faker->randompElement(['Available', 'Raising', 'Lowering', 'Fully Raised', 'Under Contruction']),
            'bridge_id' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7']),
            'status_time' => $this->faker->unixTime($max = 'now'),

        ];
    }
}
