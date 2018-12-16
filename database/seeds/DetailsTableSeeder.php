<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Answer;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $question = App\Question::all();
        $question -> each (function ($question)
        {
            $question = App\Question::inRandomOrder() -> first ();
            $answer = factory(\App\Answer::class) -> make();
            $answer -> question() -> associate ($question);

            $detail = factory(\App\Detail::class)->make();
            $detail -> question() -> associate ($question);
            $detail ->save();

        });
    }
}
