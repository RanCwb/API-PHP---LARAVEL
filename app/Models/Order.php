<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public $timestamps = true;

    public $fillable = [
        'user_id',
        'total',
        'status',
        'draft',
        'name'
    ];

   public function item(){
       return $this->hasMany(Item::class, 'order_id');
   }
}