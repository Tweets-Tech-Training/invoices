<?php

namespace App\Http\Livewire;

use App\Exports\BillExport;
use App\Exports\ExpensesExport;
use App\Models\Bill as BillModel;
use App\Models\ExpenesesBill;
use App\Models\ExpenesesBill as ExpenesesBillModel ;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class ExpensesBill extends Component
{
    use WithPagination;
    public  $search_array=[];
    public $to , $from,$totalPrice;
    public $deleteId = '';
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
//        if (isset($data['from']) && isset($data['to'])) {
//            $query->orWhereBetween('created_at', array($data['from'], $data['to']));
//        }
        //dd(ExpenesesBillModel::whereBetween('created_at', array($this->from,$this->to)));
       // $bills=ExpenesesBillModel::sum('price');



        //$bills=ExpenesesBillModel::search($this->search_array)->orderBy('id', 'asc') ;
        $bills=ExpenesesBill::search($this->search_array)->orderBy('id', 'desc')->paginate(10);
        $this->totalPrice=$bills->sum('price');
        //dd($this->total=$bills->sum('price'));
        return view('livewire.expensesBill.expenses-bill', [
            'bills' => $bills])->extends('dashboard_layout.main');
    }
//    public function delete($id)
//    {
//        ExpenesesBillModel::find($id)->delete();
//        $this->dispatchBrowserEvent('swal:modal', [
//            'type' => 'success',
//            'message' =>'تم حذف البيانات  بنجاح',
//        ]);
//
//    }
    public function export()
    {
        return Excel::download(new ExpensesExport($this->search_array), 'bills.xlsx');

    }


    public  function search()
    {


    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        ExpenesesBillModel::find($this->deleteId)->delete();
    }

}
