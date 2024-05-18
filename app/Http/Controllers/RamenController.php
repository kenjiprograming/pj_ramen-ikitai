<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Response;
use Inertia\Inertia;

class RamenController extends Controller
{
    public function index(Request $request): Response
    {
        $json = Storage::get('ramen.txt');
        $data = json_decode($json);

        return Inertia::render('Top', ['data' => $data]);
    }
}
