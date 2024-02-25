<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notats;

class FormValidationController extends Controller
{
    //
    public function createNotatForm(Request $request) {
        return view('notat');
    }
    public function NotatForm(Request $request) {
        $this->validate($request, [
            'person' => 'required',
            'tag',
            'created_by',
            'notat'
        ]);
        Notats::create($request->all());
        return back()->with('success', 'Notatet er sendt inn!');
    }
}
