<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiTestController extends Controller
{
    public function index()
    {
        $response = Http::get('https://reqres.in/api/users?page=2');
        return $response;
    }
}
