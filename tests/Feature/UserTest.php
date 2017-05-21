<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware, DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testTabela()
    {
        factory(User::class)->create([
            'name' => 'Allan Roberto',
            'email' => 'allanroberto18@gmail.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'allanroberto18@gmail.com'
        ]);
    }

    public function testInstanceModel()
    {
        $this->assertInstanceOf('App\User', new User);
    }
}
