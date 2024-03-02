<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    public $fillable = [
        
        'etternavn',
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
    ];
}
?>
