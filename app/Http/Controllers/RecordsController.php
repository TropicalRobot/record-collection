<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class RecordsController extends Controller
{
    public function index() {
        try {
            $response = Http::discogs()->get('search', [
                'artist' => 'guided by voices',
                'format' => 'album'
            ]);

            $data = json_decode($response->getBody(), true);

            return view('records.index', ['recordsData' => $data]);
        } catch (\Exception $e) {
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }
}
