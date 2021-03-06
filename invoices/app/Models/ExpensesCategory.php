<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpensesCategory extends Model
{
    use HasFactory;
    protected $table = 'expenses_categories';
    protected $fillable = [
        'name',
    ];

//    public function  expenesesBill()
//    {
//        return $this->belongsTo( ExpenesesBill::class);
//    }
    public function expenesesBill(){
        return $this->belongsToMany(ExpenesesBill::class);
    }
}
