<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petlove;

class HomeController extends Controller
{
    public function home()
    {
     $petloves = Petlove::with([
        'favorites',
        'comments'
    ])
    ->withCount('favorites')
    ->orderByDesc('favorites_count')
    ->get();

        return view(
            'home',
            compact('petloves')
        );
    }
    public function list()
    {
        $petloves = Petlove::all();

        return view('list', compact('petloves'));
    }
}