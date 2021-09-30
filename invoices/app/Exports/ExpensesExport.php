<?php

namespace App\Exports;

namespace App\Exports;

use App\Models\ExpenesesBill;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExpensesExport implements FromView
{
    use Exportable;

    public  $search_array=null;
    public $total;

    public function __construct( $search_array= null )
    {
        $this->search_array = $search_array;
    }
    public function view(): View
    {
    //->sum('price')
        if($this->search_array){
            $bills=ExpenesesBill::search($this->search_array)->orderBy('id', 'asc')->get();
         $this->total=$bills->sum('price');
            return view('livewire.expensesBill.excel')->with([
                'bills'=>$bills ,
                'total'=> $this->total,
                ]);
        }
        else{
            $bills= ExpenesesBill::get();
            $this->total=$bills->sum('price');
            return view('livewire.expensesBill.excel')->with([
                'bills'=>$bills ,
                'total'=> $this->total,
            ]);
        }

    }

}
