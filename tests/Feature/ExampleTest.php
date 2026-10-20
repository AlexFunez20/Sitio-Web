<?php

namespace Tests\Feature;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_pages_return_a_successful_response(): void
    {
        foreach (['/', '/eventos', '/boletos', '/galeria', '/nosotros', '/contacto'] as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_published_events_are_read_from_the_database(): void
    {
        Evento::create([
            'nombre' => 'Evento de prueba',
            'slug' => 'evento-de-prueba',
            'descripcion' => 'Descripción de prueba.',
            'fecha_inicio' => now()->addDay(),
            'lugar' => 'Tegucigalpa',
            'imagen' => 'eventos/prueba.jpg',
            'estado' => 'publicado',
        ]);

        $this->get('/eventos')
            ->assertOk()
            ->assertSee('Evento de prueba')
            ->assertSee('/storage/eventos/prueba.jpg', false);
    }

    public function test_contact_form_saves_a_message(): void
    {
        $this->post('/contacto', [
            'nombre' => 'Ana López',
            'correo' => 'ana@example.com',
            'mensaje' => 'Quiero información sobre los eventos.',
        ])->assertRedirect();

        $this->assertDatabaseHas('contactos', [
            'correo' => 'ana@example.com',
            'mensaje' => 'Quiero información sobre los eventos.',
        ]);
    }

    public function test_admin_panel_dashboard_requires_login_and_loads_for_authenticated_users(): void
    {
        $this->get('/admin')->assertRedirect('/admin/login');

        $this->actingAs(User::factory()->create())
            ->get('/admin')
            ->assertOk();
    }
}
