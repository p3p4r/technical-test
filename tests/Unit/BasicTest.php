<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Turbine;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;

class BasicTest extends TestCase
{

    use DatabaseTransactions, WithFaker;


    /**
     * Test Creation of Turbine model
     * @return void
     */
    public function testCreateTurbine()
    {
        $turbine = Turbine::factory()->create();

        $this->assertNotEmpty($turbine->id);
        $this->assertNotEmpty($turbine->farm_id);

        $this->assertDatabaseHas('turbines', ['farm_id' => $turbine->farm_id]);
        $this->assertDatabaseHas('turbines', ['name' => $turbine->name]);
        $this->assertDatabaseHas('turbines', ['description' => $turbine->description]);
        $this->assertDatabaseHas('turbines', ['install_date' => date('Y-m-d', strtotime($turbine->install_date))]);
        $this->assertDatabaseHas('turbines', ['status' => $turbine->status]);
    }

    public function testGetSingleTurbine()
    {
        $turbine = Turbine::factory()->create();
        $returnedTurbine = Turbine::find($turbine->id);
        $this->assertEquals($turbine->name, $returnedTurbine->name);
    }

}
