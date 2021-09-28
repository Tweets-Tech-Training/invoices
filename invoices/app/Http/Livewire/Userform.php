<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User as UserModel;
use Livewire\WithFileUploads;

class Userform extends Component
{

    use WithFileUploads ;
    public $user , $image , $password;
    public function mount($id = null)
    {
        $this->user = $id?UserModel::find($id):new UserModel();
    }
    public $rules=[
        'user.name' => 'required',
        'user.email' => 'required|email',
        'password' => 'required',
        'user.image' => 'required',
    ];

    public function render()
    {

        $citites = \App\Models\City::get();
        return view('livewire.user.form')->with([
            'citites' => $citites,
        ])->extends('dashboard_layout.main');

    }
    public function save(){

        if($this->image){
            $filename=$this->image->store('public/images');
            $imagename= $this->image->hashName();
            //$this->image = $imagename;
            $this->user->image=$imagename;
        }
        ;
        $this->validate([
            'user.name' => 'required',
            'user.email' => 'required|email',
            'password' => 'required',
            'user.image' => 'required',
            ]);

        if($this->password){
            $this->user->password=Hash::make($this->password);
        }

        $this->user->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('user')
        ]);


    }
}
