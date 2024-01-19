<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * User property
     *
     * @var User
     */
    private $user;

    /**
     * Setting up test class
     *
     * @return void
     */
    public function setUp(): void {
        parent::setUp();
        $this->withExceptionHandling();
        $this->user = User::factory()->create();
    }

    /**
     * Fail test without api Key
     * Status Code : 403
     *
     * @return void
     */
    public function test_fail_without_api_key(): void
    {
        $response = $this->getJson(route("users.show", 1));

        $response->assertForbidden();
    }

    /**
     * Test Fail when wrong X-API-KEY is provided
     * Status Code : 403
     *
     * @return void
     */
    public function test_fail_with_wrong_api_key(): void
    {
        $response = $this->getJson(route("users.show", 1), [
            'X-API-Key' => 'a-wrong-key'
        ]);

        $response->assertForbidden();
    }

    /**
     * Getting users list with proper status codes
     * Status Code : 200
     *
     * @return void
     */
    public function test_get_a_user(): void
    {
        $response = $this->getJson(route("users.show", 1))
            ->assertOk()
            ->json();
        
        // Assertions
        $this->assertEquals($this->user->name, $response['name']);
    }

    /**
     * Test a non existing user
     * Status Code : 404
     *
     * @return void
     */
    public function test_get_a_user_with_non_existing_user_id(): void 
    {
        $response = $this->getJson(route('users.show', 23))
            ->assertNotFound();
    }
}
