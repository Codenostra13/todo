<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ToDoFactory extends Factory
{
    private $index = 1;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Start step 2.1
        return [
            //'title' => $this->faker->name(),
            'title' => sprintf('task #%s', $this->index++),
            'task' => $this->faker->text(),
        ];;
    }


    // start status 2.2
    public function progress()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 10,
            ];
        });
    }

    // start status 2.3
    public function finished()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 20,
            ];
        });
    }
}
