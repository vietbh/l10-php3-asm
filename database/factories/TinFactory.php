<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Tin>
 */
class TinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            
            'title'=>fake()->sentence,
            'content'=>fake()->paragraph(5,true),
            'long_description'=>fake()->paragraphs(10,true),
            // 'id_TL'=>fake()->biasedNumberBetween(1,20)
        ];
    }
}
