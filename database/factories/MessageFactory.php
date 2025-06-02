<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<App\Models\Message>
 */
class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition(): array
    {
        return [
            'from' => rand(1, 4),
            'to' => rand(5, 11),
            'text' => $this->faker->text(),
            'new' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
