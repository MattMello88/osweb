<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsPrevisaoDeAtendimento extends Model
{
    use HasFactory;

    protected $table = 'os_previsao_de_atendimento';

    public $timestamps = false;
}
