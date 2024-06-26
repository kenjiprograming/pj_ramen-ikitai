<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

use App\Http\Controllers\Controller;
use App\Models\Ramen;

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
            'name' => ['required', 'unique:App\Models\Ramen'],
            'address' => ['required'],
            'type' => ['required'],
            'taste' => ['required'],
            'url' => ['required'],
            'time_open' => ['required'],
            'time_close' => ['required'],
            'time_open_2' => ['nullable'],
            'time_close_2' => ['nullable'],
            'date_open' => ['nullable'],
            'day_close' => ['nullable'],
        ]);

        if ($image = $request->file('image')) {
            $imageName = $image->getFilename(). '.'. $image->getClientOriginalExtension();
            $image->storeAs('public/upload', $imageName);
            $formData['image'] = $imageName;
        }

        $formData['day_close'] = implode(",", $formData['day_close']);

        Ramen::create($formData);

        return to_route('admin.ramen.index');
    }

    public function show(Ramen $ramen): Response
    {
        return Inertia::render('Admin/Show', ['ramen' => $ramen]);
    }

    public function edit(Ramen $ramen): Response
    {
        $ramen->day_close = explode(',', $ramen->day_close);
        return Inertia::render('Admin/Edit', ['ramen' => $ramen]);
    }

    public function update(Request $request, Ramen $ramen)
    {
        $formData = $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'type' => ['required'],
            'taste' => ['required'],
            'url' => ['required'],
            'old_image' => ['nullable'],
            'time_open' => ['required'],
            'time_close' => ['required'],
            'time_open_2' => ['nullable'],
            'time_close_2' => ['nullable'],
            'date_open' => ['nullable'],
            'day_close' => ['nullable'],
        ]);

        if ($image = $request->file('image')) {
            $imageName = $image->getFilename(). '.'. $image->getClientOriginalExtension();
            $image->storeAs('public/upload', $imageName);
            $formData['image'] = $imageName;

            if (!empty($formData['old_image'])) {
                unlink(storage_path('app/public/upload/'). $formData['old_image']);
            }
        }

        unset($formData['old_image']);

        $formData['day_close'] = implode(",", $formData['day_close']);

        $ramen->update($formData);

        return to_route('admin.ramen.index')
            ->with('message', 'Ramen Updated Successfully');
    }

    public function destroy(Ramen $ramen)
    {
        $ramen->delete();
        return to_route('admin.ramen.index')
            ->with('message', 'Ramen Delete Successfully');
    }

    public function generate(Request $request)
    {
        $ramens = Ramen::all();
        Storage::put('ramen.txt', json_encode($ramens));
        return to_route('admin.ramen.index')
            ->with('message', 'Ramen Generate Successfully');
    }
}
