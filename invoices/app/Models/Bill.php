<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bills';
    protected $fillable = [
        'customer_id',
        'city_id',
        'coin_id',
        'status',
        'related',
        'payment',
        'date',
        'image',
        'customerstatus',
        'totalprice',
        'tax',
        'result'

        ];


    function city(){

        return $this->belongsTo(City::class);
    }


    public function coin(){
        return $this->belongsTo(Coin::class);
    }
    public function customers(){
        return $this->belongsTo(Customer::class,'customer_id');
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function scopeSearch($query,$data)
    {
        if(isset($data['status'])){
            $query->where('status',$data['status']);
        }
        if(isset($data['from'] ) && isset($data['to'] ) ){
            $query->orWhereBetween('created_at', array($data['from'],$data['to']));
        }
        if(isset($data['name'])){
           //$search =$data['name'];
            $query->whereHas('customers',function ($q) use ($data) {
                $q->where('name',"LIKE","%".$data['name']."%");
            });
        }


        return $query;
    }
}
