<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table='orders';

       
    protected $fillable = [
        'user_id','Product_id','address', 'street', 'postcode', 'mobile', 'city', 'payment',
    ];
}
