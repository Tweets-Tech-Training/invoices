<?php

namespace App\Http\Livewire;

use App\Models\ExpenesesBill;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ExpensesCategory as ExpensesCategoryModel;
class ExpensesCategory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name,$search, $category_id;
    public $updateMode = false;
    public $isModalOpen = 0;
    protected $rules = [
        'name' => 'required|min:6',

    ];
    public function render()
    {
        if($this->search){
            $categories=ExpensesCategoryModel::orderBy('created_at', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.expensesCategory.expenses-category',['categories'=>$categories,'id'=>''])->extends('dashboard_layout.main');
        }
        else{
            $categories=ExpensesCategoryModel::orderBy('created_at', 'desc')->paginate(3);

            return view('livewire.expensesCategory.expenses-category', [
                'categories' => $categories
            ])->extends('dashboard_layout.main');
        }

    }



    public function create()
    {

        $this->reset();
        $this->openModalPopover();
        $this->emit('modalShow','#CreateCategoryModal');
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }


    public function store()
    {
        $this->validate([
            'name' => 'required',

        ]);

        ExpensesCategoryModel::updateOrCreate(['id' => $this->category_id], [
            'name' =>$this->name,
        ]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
        ]);


        $this->closeModalPopover();
        $this->emit('modalHide','#CreateCategoryModal');
        $this->reset();
    }


    public function edit($id)
    {
        $category=ExpensesCategoryModel::findorfail($id);
//        $category = CityModel::find($id);
        $this->category_id = $id;
        $this->name = $category->name;
        $this->updateMode = true;
        $this->emit('modalShow','#EditCategoryModal');

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset();
        $this->emit('modalHide','#EditCategoryModal');



    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
        ]);

        if ($this->category_id) {
            $category = ExpensesCategoryModel::find($this->category_id);
            $category->update([
                'name' => $this->name,

            ]);
            $this->updateMode = false;
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' =>'تم تعديل البيانات  بنجاح',
            ]);
            $this->reset();
            $this->emit('modalHide','#EditCategoryModal');

        }
    }


    public function delete($id)
    {
        if ( ExpenesesBill::where('expenses_category_id', $id)->exists()) {

            $this->dispatchBrowserEvent('swal2:modal', [
                'message' =>'لا يمكن حذف البيانات  ',

            ]);

        }else {
            ExpensesCategoryModel::find($id)->delete();
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => ' تم حذف البيانات ',
            ]);
        }

    }
}
