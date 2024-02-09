<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class ViewUserTest extends TestCase
{
    /** @test */
    public function it_can_view_a_user()
    {
        // Create a user
        $user = User::create([
            'name' => 'Aime Thierry',
            'email' => 'aime@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // View the created user
        $response = $this->get("/users/{$user->id}");

        $response->assertStatus(200);
        $response->assertSee($user->name);
        $response->assertSee($user->email);
    }
}
