<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Coin;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithFileUploads;
use function PHPUnit\Framework\isEmpty;

class BillForm extends Component
{
    use WithFileUploads ;

    public $bill;
 public $userId;
//    public $city_id;

    public $priceArray=[
    ['category_id'=>null,'amount'=>null,'categoryprice'=>null,'unitprice'=>null]
                ];
    public $billss, $name, $image ,$unitprice  ,$categoryprice ,$billNewId , $amount;
    public $total,$result1;
    public $tax =1;
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
        'bill.payment' => 'nullable',
        'bill.image' => 'nullable',
        'bill.number' => 'nullable',
        'bill.date' => 'nullable',
        'bill.invoice_date' => 'nullable',
        'bill.user_id' => 'nullable',
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
        $billSe=Bill::get();
        if($billSe->isEmpty() ){
            $this->billNewId=1351;
        }else{
            $this->billNewId=(Bill::latest()->first()->id)+1;
        }

//        dd($this->billNewId);
        return view('livewire.bill.form')->with([
            'customers' => $customers,
            'citites' => $citites,
            'categories' => $categories,
            'coins' => $coins,
            'billNewId'=>$this->billNewId
        ])->extends('dashboard_layout.main');

    }
    public function create()
    {

        $this->reset();
        $this->emit('modalShow','#CreateCustomerModal');
    }

    public function save()
    {
        $this->userId=auth()->user()->id;
       //dd(  $this->userId );
        if ($this->image) {
            $filename = $this->image->store('public/images');
            $imagename = $this->image->hashName();
            //$this->image = $imagename;
            $this->bill->image = $imagename;
        }
        //dd($this->bill->customer_id);
        $this->validate([
            'bill.customer_id' => 'required',
            'bill.city_id' => 'required',
            'bill.coin_id' => 'required',
            'bill.status' => 'required',
            'bill.related' => 'required',
            'bill.payment' => 'nullable',
            'bill.image' => 'nullable',
            'bill.number' => 'nullable',
            'bill.date' => 'nullable',
            'bill.invoice_date' => 'nullable',
            'bill.user_id' => 'nullable',
            'tax' => 'nullable',
            'bill.customerstatus' => 'required',
            'priceArray.*.category_id' => 'required',
            'priceArray.*.amount' => 'required',
            'priceArray.*.categoryprice' => 'required',

        ]);
//        $customer = \App\Models\Customer::firstOrCreate(['name'=>$this->bill->customer_id]);
//        if($customer){
//
//            $customrerId = $customer->id;
//           $customer =Customer::where('name', $customrerId)->first();
//        }
//        $this->bill->customer_id=$customrerId;
        if (!is_numeric($this->bill->customer_id)){
            $tag = \App\Models\Customer::firstOrCreate(['name' => $this->bill->customer_id]);

        if ($tag) {

            $expensesId = $tag->id;
        }
        $this->bill->customer_id = $expensesId;

          }
        $this->bill->save();
        $this->bill->update([
            'user_id' => $this->userId,
        ]);

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

    public function deleteRaw ()
    {
        array_pop($this->priceArray);
    }








}
