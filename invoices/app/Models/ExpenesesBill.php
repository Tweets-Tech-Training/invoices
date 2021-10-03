<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenesesBill extends Model
{
    use HasFactory;

    protected $table = 'expenses_bills';
    protected $fillable = [
        'price',
        'expenses_category_id',
    ];

   public function expensesCategories()
    {

        return $this->belongsTo(ExpensesCategory::class,'expenses_category_id');
    }
//    public function expensesCategories(){
//        return $this->belongsToMany(ExpensesCategory::class,'expenses_categories','expenses_category_id' ,'id');
//    }

    public function scopeSearch($query, $data)
    {

        if (isset($data['from']) && isset($data['to'])) {
            $query->orWhereBetween('created_at', array($data['from'], $data['to']));
        }
        if (isset($data['name'])) {

            $query->whereHas('expensesCategories', function ($q) use ($data) {
                $q->where('name', "LIKE", "%" . $data['name'] . "%");
            });
        }
    }
}
