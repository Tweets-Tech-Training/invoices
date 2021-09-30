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

    public $rules=[
        'customer.name' => 'required',
        'customer.email' => 'required|email',
        'customer.mobile' => 'required| numeric |digits:10',
        'customer.city_id' => 'required',
        'customer.address' => 'required|max:300',
    ];
    public function render()
    {


        $cities=\App\Models\City::get();
        return view('livewire.customer.form' ,compact('cities'))->extends('dashboard_layout.main');;
    }

    public function save()
    {

            $this->validate([
                'customer.name' => 'required',
                'customer.email' => 'required|email',
                'customer.mobile' => 'required| numeric |digits:10',
                'customer.city_id' => 'required',
                'customer.address' => 'required|max:300',
            ]);
            $this->customer->save();
//            $this->dispatchBrowserEvent('swal:modal', ['title' => 'تم حفظ البيانات بنجاح ']);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('customer'),
        ]);


        }





    public function update()
    {
        if($this->customer) {

            $this->validate(
                ['name' => 'required',
                'email' => 'required|email',
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
