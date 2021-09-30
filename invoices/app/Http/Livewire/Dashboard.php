<?php

namespace App\Http\Livewire;

use App\Models\ExpenesesBill;
use Livewire\Component;
use App\Models\Bill;
use Carbon\Carbon;
class Dashboard extends Component
{
    public function render()
     {
        $customers=\App\Models\Customer::count();
        $city=\App\Models\City::count();
        $category=\App\Models\Category::count();
        $bill=Bill::count();
        $expensesBill=ExpenesesBill::count();
         $date = Carbon::now()->format('Y');
         $billMonth=Bill::whereMonth(
             'created_at',
             Carbon::now()->format('m')
         )->count();
         $billDay=Bill::whereDay(
             'created_at',
             Carbon::now()->format('d')
         )->count();

//         dd($billDay);
         $billYear=Bill::whereYear('created_at', Carbon::now()->format('Y'))->count();
         //dd($billYear);
        return view('livewire.dashboard',
            [
                'customers'=>$customers,
                'city'=>$city,
                'category'=>$category,
                'bill'=>$bill,
                'billYear' =>$billYear,
                'billDay' =>$billDay,
                'billMonth' => $billMonth,
                'expensesBill'=>$expensesBill,
            ])->extends('dashboard_layout.main');
    }
}
