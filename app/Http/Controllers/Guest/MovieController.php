<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();

        $firstName = 'Gino';
        $lastName = 'Paoli';

        return view('welcome', 'movies', [
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
    }
}
