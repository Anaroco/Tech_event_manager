<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text(5),
            'available'=>rand(0,1),
            'description'=>$this->faker->text(255),
            'assistants'=>rand(0,100),
            'date'=>$this->faker->dateTime($max = 'now', $timezone = null),
            'img'=>$this->faker->imageUrl(640,480),
            
        ];
    }
}
