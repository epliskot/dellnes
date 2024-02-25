<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notat extends Model
{
    use HasFactory;
    public $fillable = [
        
        'person',
        'tag',
        'created_by',
        'notat'
    ];
}
?>