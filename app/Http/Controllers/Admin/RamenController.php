<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ramen;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;

class RamenController extends Controller
{

    public function index(Request $request): Response
    {
        $ramens = Ramen::all();
        return Inertia::render('Admin/Index', ['ramens' => $ramens]);
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

        Ramen::create($formData);

        return to_route('admin.ramen.index');
    }

    public function show(Ramen $ramen): Response
    {
        return Inertia::render('Admin/Show', ['ramen' => $ramen]);
    }

    public function edit(Ramen $ramen): Response
    {
        return Inertia::render('Admin/Edit', ['ramen' => $ramen]);
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
