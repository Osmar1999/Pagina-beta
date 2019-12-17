<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InformeModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInformeVista()
    {
        $response = $this->get('/informe');

        $response->assertStatus(200);
    }

    public function testInformeDetalleVista()
    {
        $response = $this->get('/detalleInforme1');

        $response->assertStatus(200);
    }

    public function testInformeAgregarVista()
    {
        $response = $this->get('/agregarinforme');

        $response->assertStatus(200);
    }

    public function testInformeEditarVista()
    {
        $response = $this->get('/editarInforme1');

        $response->assertStatus(200);
    }

    public function testInformeImagenesVista()
    {
        $response = $this->get('/ImagenesInforme1');

        $response->assertStatus(200);
    }


}
