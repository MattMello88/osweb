<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsAnexo extends Model
{
  use HasFactory;

  protected $table = 'os_anexo';

  public $timestamps = false;

  public function contrato()
  {
      return $this->belongsTo(OsContrato::class,'ID_CONTRATO','ID_CONTRATO');
  }
}
