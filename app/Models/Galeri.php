<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Galeri extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'image',
        'name',
        'desc',
    ];
}
