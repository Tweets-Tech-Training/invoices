<?php

namespace App\Http\Livewire;

use App\Models\Bill;
use App\Models\Category as CategoryModel;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $categories, $name,$search, $category_id;
    public $updateMode = false;
    public $isModalOpen = 0;
    protected $rules = [
        'name' => 'required|min:6',

    ];
    public function render()
    {
        if($this->search){


            $categoriess=CategoryModel::orderBy('updated_at', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.category.category',['categoriess'=>$categoriess,'id'=>''])->extends('dashboard_layout.main');
        }

        return view('livewire.category.category', [
            'categoriess' => CategoryModel::orderBy('id', 'desc')->paginate(10)
        ])->extends('dashboard_layout.main');
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

        CategoryModel::updateOrCreate(['id' => $this->category_id], [
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
        $category=CategoryModel::findorfail($id);
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
            $city = CategoryModel::find($this->category_id);
            $city->update([
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

        if (Order::where('category_id', $id)->exists()) {

            $this->dispatchBrowserEvent('swal2:modal', [
                'message' =>'لا يمكن حذف البيانات  ',

            ]);

        }else{
            CategoryModel::find($id)->delete();
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' =>'لا يمكن حذف البيانات ',
            ]);
        }

    }
}