<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class AddUserTest extends TestCase
{
    /** @test */
    public function it_can_add_a_user()
    {
        $userData = [
            'name' => 'aimee',
            'email' => 'gaju@gmail.com',
            'password' => bcrypt('password'),
        ];

        $user = User::create($userData);

        $this->assertInstanceOf(User::class, $user);
        $this->assertDatabaseHas('users', ['email' => 'aimee@example.com']);
    }
}
