<?php

use Illuminate\Database\Seeder;


class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = App\User::all();
        $user -> each(function ($user) {
           $question = factory(App\Question::class)->make();
           $question -> user() -> associate ($user);
           $question -> save();
        });
    }
}
