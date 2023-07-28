<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            ['message' => 'Do not be afraid of competition.'],
            ['message' => 'An exciting opportunity lies ahead of you.'],
            ['message' => 'You love peace.'],
            ['message' => 'Get your mind set…confidence will lead you on.'],
            ['message' => 'You will always be surrounded by true friends.'],
            ['message' => 'Sell your ideas-they have exceptional merit.'],
            ['message' => 'You should be able to undertake and complete anything.'],
            ['message' => 'You are kind and friendly.'],
            ['message' => 'You are wise beyond your years.'],
            ['message' => 'Your ability to juggle many tasks will take you far.'],
            ['message' => 'A routine task will turn into an enchanting adventure.'],
            ['message' => 'Beware of all enterprises that require new clothes.'],
            ['message' => 'Be true to your work, your word, and your friend.'],
            ['message' => 'Goodness is the only investment that never fails.'],
            ['message' => 'A journey of a thousand miles begins with a single step.'],
            ['message' => 'Forget injuries; never forget kindnesses.'],
            ['message' => 'Respect yourself and others will respect you.'],
            ['message' => 'A man cannot be comfortable without his own approval.'],
            ['message' => 'Always do right. This will gratify some people and astonish the rest.'],
            ['message' => 'It is easier to stay out than to get out.'],
            ['message' => 'Sing everyday and chase the mean blues away.'],
            ['message' => 'You will receive money from an unexpected source.'],
            ['message' => 'Attitude is a little thing that makes a big difference.'],
            ['message' => 'Plan for many pleasures ahead.'],
            ['message' => 'Experience is the best teacher.'],
            ['message' => 'You will be happy with your spouse.'],
            ['message' => 'Expect the unexpected.'],
            ['message' => 'Stay healthy. Walk a mile.'],
            ['message' => 'The family that plays together stays together.'],
            ['message' => 'Eat chocolate to have a sweeter life.'],
            ['message' => 'Once you make a decision the universe conspires to make it happen.'],
            ['message' => 'Make yourself necessary to someone.'],
            ['message' => 'The only way to have a friend is to be one.'],
            ['message' => 'Nothing great was ever achieved without enthusiasm.'],
            ['message' => 'Dance as if no one is watching.'],
            ['message' => 'Live this day as if it were your last.'],
            ['message' => 'Your life will be happy and peaceful.'],
            ['message' => 'Reach for joy and all else will follow.'],
            ['message' => 'Move in the direction of your dreams.'],
            ['message' => 'Bloom where you are planted.'],
            ['message' => 'Appreciate. Appreciate. Appreciate.'],
            ['message' => 'Happy News is on its way.'],
            ['message' => 'The one you love is closer than you think.'],
            ['message' => 'In dreams and in love there are no impossibilities.'],
            ['message' => 'Love isn\'t something you find. Love is something that finds you.'],
        ]);
    }
}
