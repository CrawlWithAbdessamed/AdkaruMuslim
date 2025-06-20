<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adkar;

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
}
