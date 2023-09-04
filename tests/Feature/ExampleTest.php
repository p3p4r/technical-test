<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/inspections');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_redirects_successfully()
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
    public function test_the_application_returns_a_successful_response_with_text()
    {
        $response = $this->get('/inspections');

        $response->assertSee('Inspections');
    }
}
