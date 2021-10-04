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
    public $deleteId = '';
    protected function rules()
    {
        return        [        'name' =>  $this->category_id?'required|string|max:255|unique:categories,name, '. $this->category_id:'required|string|max:255|unique:categories,name',

            ];
    }

    public function render()
    {

        if(auth()->user()->links->toArray()) {
            if ($this->search) {


                $categoriess = CategoryModel::orderBy('updated_at', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
                return view('livewire.category.category', ['categoriess' => $categoriess, 'id' => ''])->extends('dashboard_layout.main');
            }

            return view('livewire.category.category', [
                'categoriess' => CategoryModel::orderBy('id', 'desc')->paginate(10)
            ])->extends('dashboard_layout.main');

        } else {
            return view('home')->with(['message' => 'انت لا تملك صلاحية '])->extends('dashboard_layout.main');

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
        $this->validate();

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
        if ($this->category_id) {
            $city = CategoryModel::find($this->category_id);
            $this->validate([
                'name' =>  $this->category_id?'required|string|max:255|unique:categories,name, '. $this->category_id:'required|string|max:255|unique:categories,name',

                //'name' => 'required|unique:categories',
            ]);
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

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {

        if (Order::where('category_id', $this->deleteId )->exists()) {

            $this->dispatchBrowserEvent('swal2:modal', [
                'message' =>'لا يمكن حذف البيانات  ',

            ]);

        }else{
            CategoryModel::find($this->deleteId )->delete();
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' =>'لا يمكن حذف البيانات ',
            ]);
        }

    }
}
