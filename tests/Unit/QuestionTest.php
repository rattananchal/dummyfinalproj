<?php

namespace Tests\Unit;

use App\Question;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        /*$this->assertTrue(true);*/
        $question = Question::inRandomOrder()->first();
        $this -> assertInstanceOf('App\Question',$question);
    }
}
