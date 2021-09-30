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
        'bill.price' => 'required',
       'bill.expenses_category_id'=>'required',
//        required'expenses_category_id'=>'required',
        ];
    public function render()
    {
        $categories = \App\Models\ExpensesCategory::get();
        return view('livewire.expensesBill.expenses-bill-form')->with([
            'categories' => $categories])->extends('dashboard_layout.main');
    }

    public function save(){
        $this->validate([
            //'bill.expenses_category_id' => 'required',
            'bill.expenses_category_id'=>'required',
            'bill.price' => 'required',
        ]);
        $this->bill->save();



        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('billExpenses')
        ]);

    }

}
