<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sejarah extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'sejarah_1',
        'sejarah_2',
        'sejarah_3',
    ];
}
