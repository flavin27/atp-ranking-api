<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RankingControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_endpoint_should_return_json(): void {
        $response = $this->get('api/ranking/1');
        
        $response->assertStatus(200)->assertJsonStructure([
            'Ranking',
            'Pontuacao',
            'Nome'
        ]);
    }
    
}
