<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $cost = [
        'created_at',
        'updated_at'
    ];


    protected $fillable = [
        'name',
        'image'

    ];
}
