<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ocorrencia extends Model
{
    use Notifiable;

    protected $fillable = [
        'lugar',
        'nivel',
        'motivo',
    ];
}
