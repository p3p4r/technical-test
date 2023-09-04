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
        $response = $this->get('/inspections');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApplicationRedirectsSuccessfully()
    {
        $response = $this->get('/');

        $response->assertRedirect('/inspections');
        $response->assertStatus(302);
    }

     /**
     * A basic test example.
     *
     * @return void
     */
    public function testApplicationReturnsSuccessfulResponseWithText()
    {
        $response = $this->get('/inspections');

        $response->assertSee('Inspections');
    }
}
