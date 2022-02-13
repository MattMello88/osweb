<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsEvento extends Model
{
    use HasFactory;

    protected $table = 'os_evento';

    public $timestamps = false;
}
