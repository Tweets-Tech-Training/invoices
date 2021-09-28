<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'categoryprice',
        'unitprice',
        'amount',
        'category_id',
        'bill_id' ,
    ];

    public function categories()
    {
//        return $this->belongsToMany(Category::class);
        return $this->belongsTo(Category::class,'category_id');
    }
    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
