<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsChamado extends Model
{
    use HasFactory;

    protected $table = 'os_chamado';


    public function empresa()
    {
        return $this->hasOne(OsEmpresa::class, 'ID_EMPRESA', 'ID_EMPRESA');
    }

    public function assunto()
    {
        return $this->belongsTo(OsAssunto::class, 'ID_ASSUNTO', 'ID_ASSUNTO');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class,'ID_RESPONSAVEL','ID_USUARIO');
    }

    public function criador()
    {
        return $this->belongsTo(User::class,'ID_CRIADOR','ID_USUARIO');
    }

    public function produto()
    {
        return $this->belongsTo(OsProduto::class, 'ID_PRODUTO', 'ID_PRODUTO');
    }

    public function previsao()
    {
        return $this->belongsTo(OsPrevisaoDeAtendimento::class, 'PREVISAODEATENDIMENTO_ID_PREVISAO_DE_ATENTIMENTO', 'ID_PREVISAO_DE_ATENTIMENTO');
    }
}
