<?php

namespace Database\Factories;

use App\Models\Boundary_group;
use Illuminate\Database\Eloquent\Factories\Factory;

class Boundary_groupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Boundary_group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'group_name' => $this->faker->name,
        ];
    }
}
