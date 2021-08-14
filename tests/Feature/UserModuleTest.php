<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    public function cargar_lista_usuario(){
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuario registrado');    
    }
    /** @test */
    public function crear_nuevo_usuario(){
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear un usuario');    
    }
}
