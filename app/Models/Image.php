<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public $fillable = [
        
        'created_at',
        'updated_at',
        'file_path',
        'description',
        'name'
    ];
}
?>