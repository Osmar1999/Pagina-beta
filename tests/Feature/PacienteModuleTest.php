<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PacienteModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPacienteVista()
    {
        $response = $this->get('/paciente');

        $response->assertStatus(200);
    }

    public function testPacienteDetalleVista()
    {
        $response = $this->get('/detallePaciente1');

        $response->assertStatus(200);
    }

    public function testPacienteAgregarVista()
    {
        $response = $this->get('/AgregarPaciente');

        $response->assertStatus(200);
    }

    public function testPacienteEditarVista()
    {
        $response = $this->get('/actualizarPaciente1');

        $response->assertStatus(200);
    }

}
