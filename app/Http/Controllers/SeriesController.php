<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series= [
            'Punisher',
            'Zelda',
            'Invencível',
        ];

        return view('series.index') -> with('series', $series);
    }
}
