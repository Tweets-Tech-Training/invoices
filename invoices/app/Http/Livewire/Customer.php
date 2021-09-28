<?php

namespace App\Http\Livewire;

use App\Models\Bill;
use App\Models\Customer as CustomerModel;
use Livewire\Component;
use Livewire\WithPagination;

class Customer extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public function render()
    {
        if($this->search){
            $customerss=CustomerModel::orderBy('updated_at', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.customer.index',['customerss'=>$customerss,'id'=>''])->extends('dashboard_layout.main');
        }
        return view('livewire.customer.index', [
            'customerss' => CustomerModel::orderBy('id', 'desc')->paginate(2)
        ])->extends('dashboard_layout.main');
    }
    public function delete($id)
    {


        if (Bill::where('customer_id', $id)->exists()) {

            $this->dispatchBrowserEvent('swal2:modal', [
                'message' =>'لا يمكن حذف الزبون  ',

            ]);

        }else{
        CustomerModel::find($id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حذف البيانات  بنجاح',
        ]);
        }
    }
}
