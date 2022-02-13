<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsEmpresaProduto extends Model
{
    use HasFactory;

    protected $table = 'os_empresa_produto';

    public $timestamps = false;

    public function produto()
    {
        return $this->hasOne(OsProduto::class, 'ID_PRODUTO', 'ID_PRODUTO');
    }

    public function empresa()
    {
        return $this->hasOne(OsEmpresa::class, 'ID_EMPRESA', 'ID_EMPRESA');
    }
}
