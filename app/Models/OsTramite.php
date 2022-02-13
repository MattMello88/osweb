<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsTramite extends Model
{
    use HasFactory;

    protected $table = 'os_tramite';

    protected $primaryKey = 'ID_TRAMITE';

    public $timestamps = false;

    public function criador()
    {
        return $this->belongsTo(User::class,'ID_USUARIO_CRIADOR','ID_USUARIO');
    }

    public function responsavel()
    {
        return $this->belongsTo(User::class,'ID_USUARIO_RESPONSAVEL','ID_USUARIO');
    }
}
