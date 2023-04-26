<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;

    protected $table = 'noticia';
    protected $fillable = [
        'id',
        'title',
        'user_id',
        'description',
        'created_at'
    ];
}
