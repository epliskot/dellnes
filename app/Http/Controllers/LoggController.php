<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logg;

class LoggController extends Controller
{
    //
    public function createLogg(Request $request) {
        return view('logg');
    }
    public function NotatForm(Request $request) {
        $this->validate($request, [
            'oppdatering_av',
            'oppdatering_hva',
            'created_at'
        ]);
        Logg::create($request->all());
        return back()->with('success', 'Logg oppdatert!');
    }
}