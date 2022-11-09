<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
        //Verifica que estos elementos se encuentren dentro de la vista proporcionada
        $response->assertSeeText(['Nombre', 'Correo electrónico', 'Comentario']);
    }

    /** @test */
    public function validacion_formulario()
    {
        //Valida la información de los campos del formulario mandandolos de forma incorrecta
        $response = $this->post('/recibe-form-contacto', [
            'nombre' => '',
            'correo' => 'correoNoValido',
            'comentario' => 'asd',
        ]);

        //Verifica el contenido de las variables que previamente le asignamos
        $response->assertSessionHasErrors([
            'nombre',
            'correo',
            'comentario',
        ]);
    }

    /** @test */
    public function prellenado_formulario_contacto()
    {
        //Valida que la ruta responda a la petición solicitada
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);

        //Verifica que 'Alexis Vega' se asigna en la variable 'nombre' al llamar la ruta anterior
        $this->assertEquals('Alexis Vega', $response['nombre']);
    }
}
