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

    public function search(Request $request)
    {
        $json = Storage::get('ramen.txt');
        $data = json_decode($json);

        $params = $request->all();

        $result[] = array_filter($data, function ($datum) use ($params) {
            foreach ($params as $key => $value) {
                if (!isset($datum->$key) || strpos($datum->$key, $value) === false) {
                    return false;
                }
            }
            return true;
        });


        dd($result);
    }

    public function show(Request $request)
    {
        $json = Storage::get('ramen.txt');
        $data = json_decode($json);
        $id = $request->get('id');

        $result = array_filter($data, function ($datum) use ($id) {
            return strpos($datum->id, $id) !== false;
        });


        dd($result);
    }
}
