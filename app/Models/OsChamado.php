<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsChamado extends Model
{
    use HasFactory;

    protected $table = 'os_chamado';


    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
