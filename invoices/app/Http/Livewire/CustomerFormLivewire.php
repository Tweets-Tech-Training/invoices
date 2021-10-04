<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerFormLivewire extends Component
{
 public $customer;


    public $customers, $customer_id,$name, $city_id , $address , $mobile , $email ;

    public function mount($id=null)
    {
        $this->customer = $id?Customer::find($id):new Customer();
    }

//    public $rules=[
//        'customer.name' =>  $this->customer->id?'required|string|max:255|unique:customers,name, '. $this->customer->id:'required|string|max:255|unique:customers,name',
//
//        'customer.commissioner' => 'required',
//        'customer.mobile' => 'required| numeric |digits:10',
//        'customer.city_id' => 'required',
//        'customer.address' => 'required|max:300',
//    ];
    protected function rules()
    {
        return [ 'customer.name' =>  $this->customer->id?'required|string|max:255|unique:customers,name, '. $this->customer->id:'required|string|max:255|unique:customers,name',
        'customer.commissioner' => 'required',
        'customer.mobile' => 'required| numeric | digits:12',
        'customer.city_id' => 'required',
        'customer.address' => 'required|max:300',
    ];
        }
    public function render()
    {


        $cities=\App\Models\City::get();
        return view('livewire.customer.form' ,compact('cities'))->extends('dashboard_layout.main');;
    }

    public function save()
    {

            $this->validate();
            $this->customer->save();
//            $this->dispatchBrowserEvent('swal:modal', ['title' => 'تم حفظ البيانات بنجاح ']);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('bill.create'),
        ]);


        }

    public function update()
    {
        if($this->customer) {

            $this->validate(
                ['name' => 'required',
                'commissioner' => 'required',
                'mobile' => 'required| numeric |digits:10',
                'city_id' => 'required',
                'address' => 'required|max:300',
                     ]);
            $this->customer->update();

                $this->dispatchBrowserEvent('swal:modal', ['title' => 'تم حفظ البيانات بنجاح ']);
                $this->reset();



        }
    }



}
