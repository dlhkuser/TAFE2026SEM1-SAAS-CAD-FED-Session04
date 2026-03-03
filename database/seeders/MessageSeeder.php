<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $seedMessages = [
            [
                'id' => 1,
                'name' => 'John',
                'email' => fake()->unique()->safeEmail(),
                'subject' => fake()->unique()->sentence(),
                'topic_id' => 1,
                'message' => fake()->unique()->paragraph(),
            ],
            [
                'name' => fake()->unique()->name(),
                'email' => fake()->unique()->safeEmail(),
                'subject' => fake()->unique()->sentence(),
                'topic_id' => 101,
                'message' => fake()->unique()->paragraph()
            ],[
                'name' => fake()->unique()->name(),
                'email' => fake()->unique()->safeEmail(),
                'subject' => fake()->unique()->sentence(),
                'topic_id' => 102,
                'message' => fake()->unique()->paragraph()
            ],
        ];

        foreach ($seedMessages as $seedMessage) {
            Message::create($seedMessage);
        }
        Message::whereTopicId(101)->first()->delete();

    }
}
