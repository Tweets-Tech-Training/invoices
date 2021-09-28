<?php

namespace App\Http\Livewire;

use App\Models\Bill;
use App\Models\Coin as CoinModel;
use Livewire\Component;
use Livewire\WithPagination;

class Coin extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search ;
    public $coins, $name, $coin_id , $code;
    public $updateMode = false;
    public $isModalOpen = 0;


    public function render()
    {
        if($this->search){


            $coinss=CoinModel::orderBy('updated_at', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.coin.coin',['coinss'=>$coinss,'id'=>''])->extends('dashboard_layout.main');
        }
        return view('livewire.coin.coin', [
            'coinss' => CoinModel::orderBy('id', 'desc')->paginate(10)
        ])->extends('dashboard_layout.main');
    }

    public function create()
    {

        $this->reset();
        $this->openModalPopover();
        $this->emit('modalShow','#CreateCoinModal');
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
            'code' => 'required',

        ]);

        CoinModel::updateOrCreate(['id' => $this->coin_id], [
            'name' =>$this->name,
            'code' => $this->code,
        ]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
        ]);

        $this->closeModalPopover();
        $this->emit('modalHide','#CreateCoinModal');
        $this->reset();
    }


    public function edit($id)
    {
        $coin=CoinModel::findorfail($id);
//        $coin = CoinModel::find($id);
        $this->coin_id = $id;
        $this->name = $coin->name;
        $this->code = $coin->code;
        $this->updateMode = true;
        $this->emit('modalShow','#EditCoinModal');

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset();
        $this->emit('modalHide','#EditCoinModal');


    }

    public function update()
    {

        $this->validate([
            'name' => 'required',
            'code' => 'required',

        ]);

        if ($this->coin_id) {
            $coin = CoinModel::find($this->coin_id);
            $coin->update([
                'name' => $this->name,
                'code' => $this->code,

            ]);
            $this->updateMode = false;
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' =>'تم تعديل البيانات  بنجاح',
            ]);
            $this->reset();
            $this->emit('modalHide','#EditCoinModal');

        }
    }


    public function delete($id)
    {


        if (Bill::where('coin_id', $id)->exists()) {

            $this->dispatchBrowserEvent('swal2:modal', [
                'message' =>'لا يمكن حذف البيانات  ',

            ]);

        }else{
            CoinModel::find($id)->delete();
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' =>'تم حذف البيانات  بنجاح',
            ]);
        }

    }
}
