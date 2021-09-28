<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';

    protected $fillable= [
        'name',
        'email',
        'mobile',
        'city_id',
        'gender',
        'address',
    ];


    function city(){
        return $this->belongsTo(City::class);
    }
    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
