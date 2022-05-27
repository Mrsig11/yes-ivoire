<?php

namespace App\Http\Controllers;

use App\Models\Visiteur;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function create(Request $request)
    {
        $data = request()->validate([
            'email' => ['required', 'email']
        ]);

        Visiteur::create([
            'email' => $request->email,
            'message' => $request->message,
            'abonner' => $request->abonner
        ]);

        return redirect()->route('index');
    }

    public function new_letter(Request $request) {
        Visiteur::create([
            'email' => $request->email
        ]);

        return redirect()->route('index');
    }
}
