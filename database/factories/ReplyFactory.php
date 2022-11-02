<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reply;

class ReplyFactory extends Factory
{

    protected $model = Reply::class;

    public function definition()
    {
        return [
            'content'   => $this->faker->sentence(),
            'topic_id'  => rand(1,10),
            'user_id'   => rand(1,10),
        ];
    }
}
