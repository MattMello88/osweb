<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsInterrupcao extends Model
{
    use HasFactory;

    protected $table = 'os_interrupcao';

    public $timestamps = false;
}
