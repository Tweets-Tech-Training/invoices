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
        'result',
        'user_id'

        ];


    function city(){

        return $this->belongsTo(City::class);
    }


    public function coins(){
        return $this->belongsTo(Coin::class,'coin_id');
    }
    public function customers(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function scopeSearch($query,$data)
    {
//        commissioner
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
        if(isset($data['commissioner'])){

            $query->whereHas('customers',function ($q) use ($data) {
                $q->where('commissioner',"LIKE","%".$data['commissioner']."%");
            });
        }
        if(isset($data['mobile'])){
            $query->whereHas('customers',function ($q) use ($data) {
                $q->where('mobile',"LIKE","%".$data['mobile']."%");
            });
        }

        if(isset($data['coinName'])){
            $query->whereHas('coins',function ($q) use ($data) {
                $q->where('name',"LIKE","%".$data['coinName']."%");
            });
        }


        return $query;
    }
}
