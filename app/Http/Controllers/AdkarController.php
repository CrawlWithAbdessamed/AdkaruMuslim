<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adkar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdkarController extends Controller
{
    public function index ($type) 
    {
        $adkars = Adkar::where('type', $type)->get();
        return view('index', compact('adkars', 'type'));
    }

    public function store(Request $request)
    {
        $request->validate(['adkar_id' => 'required|exists:adkars,id']);

        // $user = Auth::user();

        $user = User::first(); // or User::find(1);
        
        $adkar = Adkar::findOrFail($request->adkar_id);

        $user->adkars()->attach($adkar->id, ['completed' => true]);

        return response()->json(['message' => 'Adkar completed successfully']);
    }
}
