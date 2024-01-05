<?php

namespace Database\Seeders;

use App\Models\Reaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')
            ->where('is_active', true)
            ->get()
            ->each(function($message) {
                $emojis = Arr::random(Reaction::$reactions, 2);

                DB::table('reactions')->insert([
                    ['message_id' => $message->id, 'reaction' => $emojis[0], 'count' => random_int(2, 99)],
                    ['message_id' => $message->id, 'reaction' => $emojis[1], 'count' => random_int(2, 99)],
                ]);
            });

    }
}
