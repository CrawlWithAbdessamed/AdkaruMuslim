<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adkar;

class HomeController extends Controller
{
    public function index() {
        $adkars = Adkar::with('users')->get();

        return view('home', compact('adkars'));
    }
}
