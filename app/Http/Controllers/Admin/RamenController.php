<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;

class RamenController extends Controller
{

    public function index(Request $request): Response
    {
        return Inertia::render('Admin/Index', []);
    }

    public function create(Request $request): Response
    {
        return Inertia::render('Admin/Create', []);
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'type' => ['required'],
            'taste' => ['required'],
            'time_open' => ['required'],
            'time_close' => ['required'],
            'date_open' => ['required'],
            'day_close' => ['required'],
        ]);

        dump($formData);
        exit;

        return redirect()->route('news.index');
    }

    public function show(Request $request): Response
    {
        return Inertia::render('Admin/Show', []);
    }

    public function edit(Request $request): Response
    {
        return Inertia::render('Admin/Edit', []);
    }

    public function update(Request $request): void
    {
        redirect();
    }

    public function destroy(Request $request): void
    {
        redirect();
    }
}
