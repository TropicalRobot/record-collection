<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api\Discogs;

class RecordsController extends Controller
{
    /**
     * @var Discogs
     */
    protected $discogs;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->discogs = new Discogs();
    }

    public function index() {

        $data = $this->discogs->get('artists/83529/releases', [
            'sort' => 'year',
            'sort_order' => 'desc'
        ]);

        return view('records.index', ['recordsData' => $data]);
    }

    public function search(Request $request) {

        $data = null;

        if (! empty($request->get('q'))) {
            $data = $this->discogs->search($request->get('q'), [
                'type' => 'release',
                'format' => 'lp'
            ]);
        }

        return view('records.search', ['recordsData' => $data]);
    }

    public function show(string $id) {

        $data = $this->discogs->get("masters/{$id}");

        return view('records.show', ['recordData' => $data]);
    }
}
