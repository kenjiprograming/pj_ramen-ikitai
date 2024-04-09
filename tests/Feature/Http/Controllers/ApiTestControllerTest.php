<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTestControllerTest extends TestCase
{
    public function test_ラーメン情報の一覧を取ってこれる(): void
    {
        $response = $this->get('/ramens');

        $response->assertStatus(200);
    }

    public function test_ラーメン情報の一覧をJsonとして取ってこれる(): void
    {
        $response = $this->get('/ramens');
        $dataArr = $response->json();

        $response->assertOk();
        $response->assertJson($dataArr);
    }

    public function test_postした値に応じてラーメン情報の対象をJsonとして取ってこれる(): void
    {
        $response = $this->post('/ramens');
        $dataArr = $response->json();

        $response->assertOk();
        $response->assertJson($dataArr);
    }
}
