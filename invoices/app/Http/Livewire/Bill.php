<?php

namespace App\Http\Livewire;

use App\Exports\BillExport;
use App\Models\Bill as BillModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;

class Bill extends Component
{
    use WithPagination;
    public $search;
    public $status , $name, $from,$totalResult , $to  ,$search_array=[];
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        if(auth()->user()->links->toArray()){
//            $bills=BillModel::search($this->search_array)->orderBy('id', 'desc') ->paginate(10);
//            $this->totalResult= \App\Models\Bill::whereMonth(
//                'created_at',
//                Carbon::now()
//            )->sum('result');
            $bills= \App\Models\Bill::search($this->search_array)->orderBy('id', 'asc')->paginate(10);
            $this->totalResult=$bills->sum('result');
           $coins= \App\Models\Coin::all();
            return view('livewire.bill.bill', [
                'bills' => $bills ,'totalResult' => $this->totalResult, 'coins' => $coins])->extends('dashboard_layout.main');
        } else {
            return view('home')->with(['message' => 'انت لا تملك صلاحية '])->extends('dashboard_layout.main');

        }

    }
    public function delete($id)
    {
        BillModel::find($id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حذف البيانات  بنجاح',
        ]);

    }
    public function export()
    {
        return Excel::download(new BillExport($this->search_array), 'bills.xlsx');

    }


    public  function search()
    {


    }





}
