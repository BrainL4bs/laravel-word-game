<?php

namespace Database\Factories;

use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Word::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'words' => $this->faker->word,
            'word_length' => $this->faker->numberBetween(3, 10),
            'image' => 'https://placehold.co/450x450/EEE/31343C',
            'tips' => $this->faker->sentence,
        ];
    }
}
