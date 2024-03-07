<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logg extends Model
{
    use HasFactory;
    public $fillable = [
        
        'oppdatering_av',
        'oppdatering_hva',
        
        
    ];
}
?>