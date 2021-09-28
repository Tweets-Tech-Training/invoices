<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Coin;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithFileUploads;

class BillForm extends Component
{
    use WithFileUploads ;

    public $bill;

//    public $city_id;

    public $priceArray=[
    ['category_id'=>null,'amount'=>null,'categoryprice'=>null,'unitprice'=>null]
                ];
    public $billss, $name, $image ,$unitprice ,$tax ,$categoryprice , $amount;
    public $total,$result1;
    public function mount($id=null)
    {
        $this->bill = $id?Bill::find($id):new Bill();
        if($id){
            $this->tax=$this->bill->tax;
        }
        $this->priceArray= $id?$this->bill->orders()->get()->toArray(): $this->priceArray;
    }

    public $rules=[
        'bill.customer_id' => 'required',
        'bill.city_id' => 'required',
        'bill.coin_id' => 'required',
        'bill.status' => 'required',
        'bill.related' => 'required',
        'bill.payment' => 'required',
        'bill.image' => 'required',
        'bill.date' => 'nullable',
        'tax' => 'required',
        'bill.totalprice' => 'nullable',
        'bill.result' => 'nullable',
        'bill.customerstatus' =>'required',
        'priceArray.*.category_id' => 'required',
        'priceArray.*.amount' => 'required',
        'priceArray.*.categoryprice' => ['required'],

    ];
    public function render()
    {
        $customers = Customer::get();
        $citites = \App\Models\City::get();
        $categories = Category::get();
        $coins = Coin::get();
        return view('livewire.bill.form')->with([
            'customers' => $customers,
            'citites' => $citites,
            'categories' => $categories,
            'coins' => $coins,
        ])->extends('dashboard_layout.main');

    }


    public function save()
    {

//       dd(   $this->bill,$this->priceArray);
        if($this->image){
            $filename=$this->image->store('public/images');
            $imagename= $this->image->hashName();
            //$this->image = $imagename;
            $this->bill->image=$imagename;
        }
        $this->validate([
            'bill.customer_id' => 'required',
            'bill.city_id' => 'required',
            'bill.coin_id' => 'required',
            'bill.status' => 'required',
            'bill.related' => 'required',
            'bill.payment' => 'required',
            'bill.image' => 'required|max:1024',
            'bill.date' => 'nullable',
            'tax' => 'required',
            'bill.customerstatus' =>'required',
            'priceArray.*.category_id'=>'required',
           'priceArray.*.amount' => 'required',
            'priceArray.*.categoryprice' => 'required',

        ]);
      $this->bill->save();
        foreach ($this->priceArray as $index => $price ){
            $this->priceArray[$index]['unitprice'] =(float) $this->priceArray[$index]['amount'] * (float) $this->priceArray[$index]['categoryprice'];
            $this->total +=   $this->priceArray[$index]['unitprice'];
            Order::updateOrCreate([
                    'category_id' => $this->priceArray[$index]['category_id'],
                    'amount' =>$this->priceArray[$index]['amount'],
                    'categoryprice' =>$this->priceArray[$index]['categoryprice'],
                    'unitprice' => $this->priceArray[$index]['unitprice'],
                    'bill_id'  => $this->bill->id,
                ]);
        }
        $this->result1 = $this->total * $this->tax;
        $this->bill->update([
            'tax' =>  $this->tax,
            'totalprice' =>$this->total,
           'result' =>$this->result1,
        ]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
           // 'message' => $this->bill->id ? 'تم تعديل البيانات  بنجاح' : 'تم إضافة  البيانات بنجاح',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('bill')
        ]);
//         return back();
     //   return redirect('bill');
    }

    public function addRow (){
        $this->priceArray[]= ['category_id'=>null,'amount'=>null,'categoryprice'=>null,'unitprice'=>null];
    }










}
