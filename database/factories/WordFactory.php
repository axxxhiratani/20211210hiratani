<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Word;

class WordFactory extends Factory
{
    /**
     *
     * @var
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
            //
            "library_id" => $this->faker->numberBetween(1,3),
            "name" => $this->faker->word,
            "meaning" => $this->faker->word,
            "note" => $this->faker->word
        ];
    }
}
