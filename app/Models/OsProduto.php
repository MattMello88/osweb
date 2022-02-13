<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsProduto extends Model
{
    use HasFactory;

    protected $table = 'os_produto';

    public $timestamps = false;
}
