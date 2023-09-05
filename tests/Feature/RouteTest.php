<?php

namespace Tests\Feature;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTheApplicationReturnsSuccessfulResponse()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApplicationRedirectsSuccessfully()
    {
        $response = $this->get('/inspections');

        $response->assertRedirect('/login');
        $response->assertStatus(302);
    }

     /**
     * A basic test example.
     *
     * @return void
     */
    public function testApplicationReturnsSuccessfulResponseWithText()
    {
        $response = $this->get('/login');
        $response->assertSee('Sign in');
    }
}
