<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adkar;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        $users = User::with('adkar')->get();

        return view('home', compact('users'));
    }
    
}
