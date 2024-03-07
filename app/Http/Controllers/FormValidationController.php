<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notats;
use App\Models\Logg;

class FormValidationController extends Controller
{
    //
    public function createNotatForm(Request $request) {
        return view('notat');
    }
    public function NotatForm(Request $request) {
        $this->validate($request, [
            'person',
            'etternavn',
            'fornavn',
            'fornavn',
            'tag' => 'required',
            'created_by',
            'notat' =>'required',
            'bilder'
        ]);
        
        Notats::create($request->all());

        
        $oppdatering = $request->all();
        
        Logg::create(['oppdatering_av' => $oppdatering['created_by'], 'oppdatering_hva' => "Opprettet notat på " . $oppdatering['fornavn'] . " " . $oppdatering['etternavn'] ]);
        
        

        return back()->with('success', 'Notatet er sendt inn! Hvis du ønsker å lese det, så gå tilbake til Meny');
    }
    
}
