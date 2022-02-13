<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsBancoDado extends Model
{
    use HasFactory;

    protected $table = 'os_banco_dados';

    public $timestamps = false;
}
