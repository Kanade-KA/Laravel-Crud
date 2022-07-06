<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    //QUE CAMPOS SERÁN LLENADOS
    protected $fillable = ['nombre', 'precio', 'provedor'];
}
