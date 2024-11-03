<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserCreationTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_be_created()
    {
        $userData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password123')
        ];

        User::create($userData);

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com'
        ]);
    }
}
