<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    public $timestamps = true;

    public $fillable = [
        'name',
        'amount',
    ];
    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product(){
        
        return $this->belongsTo(Product::class, 'product_id');
    }
}