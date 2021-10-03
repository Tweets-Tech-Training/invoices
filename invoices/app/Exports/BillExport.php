<?php

namespace App\Exports;

use App\Models\Bill;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
class BillExport implements FromView
{
    use Exportable;

    public  $search_array=null;
    public $total;
    public function __construct( $search_array= null)
    {
        $this->search_array = $search_array;
    }
    public function view(): View
    {

       // if($this->status){
        if($this->search_array){
            $bills=Bill::search($this->search_array)->orderBy('id', 'asc')->get();
            $this->total=$bills->sum('result');
           // $bills= Bill::where('status',$this->status)->get();
            return view('livewire.bill.excel')->with([
                'bills'=>$bills ,
                'total'=> $this->total,
            ]);
        }
        else{
            $bills= Bill::get();
            $this->total=$bills->sum('result');
            return view('livewire.bill.excel')->with([
                'bills'=>$bills ,
                'total'=> $this->total,
            ]);
        }

    }

}
