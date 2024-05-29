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
            if (array_key_exists('all', $params)) {
                $judges = [];
                $values = explode(" ", $params['all']);

                foreach ($values as $value) {
                    if (str_contains($datum->name, $value)    ||
                        str_contains($datum->address, $value) ||
                        str_contains($datum->type, $value)    ||
                        str_contains($datum->taste, $value)
                    ) {
                        $judges[] = true;
                    } else {
                        $judges[] = false;
                    }
                }

                return !in_array(false, $judges);
            }

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
