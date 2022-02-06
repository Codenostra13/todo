<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ToDo;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // start status 3
        //ToDo::factory(10)->create();
        //ToDo::factory(10)->progress()->create();
        //ToDo::factory(10)->finished()->create();

        ToDo::factory()
            ->count(30)
            ->state(new Sequence(
                ['status' => 0],
                ['status' => 10],
                ['status' => 20]
            ))->create();

        // also run seeder
    }
}
