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
    /*public $rules=[
        'user.name' => 'required',
        //'user.email' => 'required|email',
         // 'user.email' => 'required|email|unique:users,email,'.$id,
        'password' => 'required',
        'user.image' => 'required',
    ];*/
    protected function rules()
    {
        return [
            'user.name' => 'required|string',
            //'username' => 'required|min:6|max:255|alpha_dash|unique:users,username,' . $this->userID,
          'user.email' =>  $this->user->id?'required|string|email|max:255|unique:users,email, '. $this->user->id:"required|string|email|max:255|unique:users,email",
//            'user.email' => ['required', 'email', 'not_in:' . $this->user->id],
            'password' => 'required',
            'user.image' => 'required',
        ];
    }

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
        $this->validate();

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
