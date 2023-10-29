<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table='make';
    
    protected $fillable = [
        'name', 'email', 'number', 'gender', 'password', 'role','file',
    ];
}

