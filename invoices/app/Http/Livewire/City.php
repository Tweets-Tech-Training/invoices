<?php

namespace App\Http\Livewire;
use App\Models\City as CityModel;
use App\Models\Bill;
//use League\Config\Exception\ValidationException;
use Livewire\Component;
use Livewire\WithPagination;
use Nette\Schema\ValidationException;

class City extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

//    public CityModel $city;
    public $cities, $name, $city_id;
    public $updateMode = false;
    public $isModalOpen = 0;
    public $search ;


//    public function mount(CityModel $city)
//    {
//        $this->$city = $city;
//    }

    protected function rules()
    {
        return        [        'name' =>  $this->city_id?'required|string|max:255|unique:cities,name, '. $this->city_id:'required|string|max:255|unique:cities,name',

        ];
    }
    public function render()
    {
        if(auth()->user()->links->toArray()) {
            if($this->search){

                $citiess=CityModel::orderBy('updated_at', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
                return view('livewire.city.index',['citiess'=>$citiess,'id'=>''])->extends('dashboard_layout.main');
            }
            return view('livewire.city.index', [
            'citiess' => CityModel::orderBy('id', 'desc')->paginate(10)
            ])->extends('dashboard_layout.main');

        } else {
            return view('home')->with(['message' => 'انت لا تملك صلاحية '])->extends('dashboard_layout.main');

         }
    }

    public function create()
    {

        $this->reset();
        $this->openModalPopover();
        $this->emit('modalShow','#CreateCityModal');
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

        CityModel::updateOrCreate(['id' => $this->city_id], [
            'name' =>$this->name,
        ]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
        ]);

        $this->closeModalPopover();
        $this->emit('modalHide','#CreateCityModal');
        $this->reset();
    }


    public function edit($id)
    {
     $city=CityModel::findorfail($id);
//        $city = CityModel::find($id);
       $this->city_id = $id;
        $this->name = $city->name;
        $this->updateMode = true;
        $this->emit('modalShow','#EditCityModal');

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset();
        $this->emit('modalHide','#EditCityModal');


    }

    public function update()
    {
//        dd("jsd");
        $validatedDate = $this->validate();

        if ($this->city_id) {
            $city = CityModel::find($this->city_id);
            $city->update([
                'name' => $this->name,

            ]);
            $this->updateMode = false;
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' =>'تم تعديل  البيانات  بنجاح',
            ]);
            $this->reset();
            $this->emit('modalHide','#EditCityModal');

        }
    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        if (Bill::where('city_id',$this->deleteId)->exists()) {
            //throw ValidationException::withMessages([
//            throw ValidationException::withMessages([
//                'city' => ['You can remove it because it is used.']
//            ]);
            $this->dispatchBrowserEvent('swal2:modal', [
                'message' =>'لا يمكن حذف البيانات  ',

            ]);

        }


      else{
    CityModel::find($this->deleteId)->delete();
    $this->dispatchBrowserEvent('swal:modal', [
        'type' => 'success',
        'message' =>'تم حذف البيانات  بنجاح',

    ]);
    }


    }

}
