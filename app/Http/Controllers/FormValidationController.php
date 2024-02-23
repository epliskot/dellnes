<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormValidationController extends Controller
{
    //
    public function createNotatForm(Request $request) {
        return view('notat');
    }
    public function NotatForm(Request $request) {
        $this->validate($request, [
            'notat' => 'required'

        ]);
        Form::create($request->all());
        return back()->with('success', 'Notatet er lagret.');
    }
}
