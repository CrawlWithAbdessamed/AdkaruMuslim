<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adkar;
use Illuminate\Support\Facades\Auth;

class AdkarController extends Controller
{
    public function index (Request $request) 
    {
        $type = $request->query('type');

        if ($type) {
            return Adkar::where('type', $type)->get();
        }

        return Adkar::all();
    }

    public function store(Request $request)
    {
        $request->validate(['adkar_id' => 'required|exists:adkars,id']);

        $user = Auth::user();

        $adkar = Adkar::findOrFail($request->adkar_id);

        $user->adkars()->attach($adkar->id, ['completed' => true]);

        return response()->json(['message' => 'Adkar completed successfully']);
    }
}
