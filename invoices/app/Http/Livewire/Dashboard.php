<?php

namespace App\Http\Livewire;

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
            ])->extends('dashboard_layout.main');
    }
}
