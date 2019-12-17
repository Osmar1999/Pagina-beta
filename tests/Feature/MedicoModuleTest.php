<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MedicoModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMedicoVista()
    {
        $response = $this->get('/medico');

        $response->assertStatus(200);
    }


    public function testMedicoDetalle()
    {
        $response = $this->get('/detalleMedico1');

        $response->assertStatus(200);
    }


    public function testMedicoAgregarVista()
    {
        $response = $this->get('/AgregarMedico');

        $response->assertStatus(200);
    }

    public function testMedicoEditarVista()
    {
        $response = $this->get('/EditarMedico/1');

        $response->assertStatus(200);
    }

    

}
