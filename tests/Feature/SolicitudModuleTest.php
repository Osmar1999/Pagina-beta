<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SolicitudModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSolicitudVista()
    {
        $response = $this->get('/solicitud');

        $response->assertStatus(200);
    }

    public function testSolicituDetalleVista()
    {
        $response = $this->get('/detallesolicitud1');

        $response->assertStatus(200);
    }

    public function testSolicituAgregarVista()
    {
        $response = $this->get('/agregarsolicitud');

        $response->assertStatus(200);
    }

    public function testSolicituEditarVista()
    {
        $response = $this->get('/agregarsolicitud');

        $response->assertStatus(200);
    }

    
}
