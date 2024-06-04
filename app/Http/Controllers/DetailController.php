<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;

class DetailController extends Controller
{
    public function index(Request $request): Response
    {
        return Inertia::render('Detail', []);
    }
}
