<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiTestController extends Controller
{
    public function index()
    {
        $response = Http::get('https://reqres.in/api/users?page=2');
        return $response;
    }

    public function post()
    {
        $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://reqres.in/api/users', [
                'name' => 'morpheus',
                'job' => 'leader',
            ]);

        return $response;
    }

    public function concurrent()
    {
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->get('https://reqres.in/api/users?page=2'),
            $pool->get('https://reqres.in/api/users/2'),
            $pool->get('https://reqres.in/api/users?page=2'),
        ]);

        return $responses;
    }
}
