<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $finduser = User::find(3);
        $finduser->delete();
        $users = User::all();
        $this->assertDatabaseMissing('users', ["name" => $finduser->name]);
    }
}
