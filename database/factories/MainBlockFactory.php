<?php

namespace Database\Factories;

use App\Models\MainBlock;
use Illuminate\Database\Eloquent\Factories\Factory;

class MainBlockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MainBlock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
        'content' => $this->faker->text,
        'url_video' => $this->faker->word,
        'bg' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
