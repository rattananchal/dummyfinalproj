<?php

namespace Tests\Unit;

use App\Profile;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $finduser = Profile::find(3);
        $finduser->fname ='Silmon';
        $finduser->save();
        $this->assertEquals('Silmon', $finduser->fname);
    }
}
