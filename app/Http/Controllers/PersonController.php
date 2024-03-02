<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    //
    public function createPersonForm(Request $request) {
        return view('person');
    }
    public function PersonForm(Request $request) {
        $this->validate($request, [
           
            'etternavn' => 'required',
            'fornavn',
            'dato_dod',
            'dato_fodt',
            'fodested',
            'navn_fodt',
            'parent1',
            'parent2',
            'sted_dod',
            'barn',
            'er_gift_med',
            'var_gift_med'
            
        ]);
        Person::create($request->all());
        
        return back()->with('success', 'Person opprettet.');
    }
    
}
