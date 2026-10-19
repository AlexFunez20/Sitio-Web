<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_all_pages_return_a_successful_response(): void
    {
        foreach (['/', '/eventos', '/boletos', '/galeria', '/nosotros', '/contacto'] as $url) {
            $this->get($url)->assertOk();
        }
    }
}
