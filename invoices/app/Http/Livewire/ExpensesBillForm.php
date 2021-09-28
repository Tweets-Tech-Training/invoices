<?php

namespace App\Http\Livewire;

use App\Models\ExpenesesBill as ExpenesesBillModel;
use App\Models\ExpensesOrder;
use Livewire\Component;
use App\Models\Bill;

class ExpensesBillForm extends Component
{

    public  $expenses_category_id ;
    public function mount($id=null)
    {
        $this->bill = $id?ExpenesesBillModel::find($id):new ExpenesesBillModel();
    }
    public $rules=[
      /*'priceArray.*.amount' =>'required',
        'priceArray.*.category_id' => 'required' ,
        'priceArray.*.categoryprice' => 'required' ,*/
        'bill.price' => 'required',
       'bill.expenses_category_id'=>'required',

        ];
    public function render()
    {
        $categories = \App\Models\ExpensesCategory::get();
        return view('livewire.expensesBill.expenses-bill-form')->with([
            'categories' => $categories])->extends('dashboard_layout.main');
    }


//    public function addRow (){
//        $this->priceArray[]= ['category_id'=>0,'amount'=>0,'categoryprice'=>0,'unitprice'=>0];
//    }

    public function save(){
        $this->validate([
            'bill.expenses_category_id' => 'required',
            'bill.price' => 'required',
        ]);
        $this->bill->save();


//        $tagsArray = explode(",",$this->expenses_category_id);
//        $tagNames = [];
//        if (!empty($tagsArray)) {
//            foreach ($tagsArray as $tagName){
//                $tag = \App\Models\ExpensesCategory::firstOrCreate(['name'=>$tagName]);
//
//                if($tag){
//                    // dd($tag->id);
//                    $tagNames[] = $tag->id;
//                }
//            }
//            $this->bill->expensesCategories()->syncWithoutDetaching($tagNames);
//        }
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('billExpenses')
        ]);

    }

}
