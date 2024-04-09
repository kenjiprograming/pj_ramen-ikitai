<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTestControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_ラーメン情報の一覧を取ってこれる(): void
    {
        $response = $this->get('/ramens');

        $response->assertStatus(200);
    }
}
