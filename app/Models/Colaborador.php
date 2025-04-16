<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'setor',
        'cidade',
        'data_checkin',
    ];
}
