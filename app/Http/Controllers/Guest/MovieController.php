<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $firstName = 'Gino';
        $lastName = 'Paoli';

        return view('welcome', [
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
    }
}
