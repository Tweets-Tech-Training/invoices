<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $image,$user , $password;
    public function mount()
    {
        $this->user =auth()->user();

    }
    public $rules=[
        'user.name' => 'required',
        'user.email' => 'required',
        'user.image' => 'nullable',
       // 'user.password' => 'required',
        ];

    public function save()
    {
        $user =auth()->user();
        $this->validate([
            'user.name' => 'required',
        ]);

        if($this->image){
            $filename=$this->image->store('public/images');
            $imagename= $this->image->hashName();
            //$this->image = $imagename;
            $this->user->image=$imagename;
            $this->user->save([
                'user.image' => $imagename,
            ]);
        }


        if($this->password){
            $this->user->update([
                'password' => Hash::make($this->password),
            ]);
        }
        $this->user->update([
            'user.name' => $this->user->name,

        ]);

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('Maindashboard')
        ]);

        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.profile.profile')->extends('dashboard_layout.main');
    }
}
