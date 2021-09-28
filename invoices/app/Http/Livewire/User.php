<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as UserModel;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class User extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $user , $search;



    public function render()
    {
        if($this->search){
            $users=UserModel::orderBy('updated_at', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.user.user'
                ,['users' => $users])->extends('dashboard_layout.main');
        }else{
            $users=UserModel::orderBy('id', 'asc') ->paginate(10);
            return view('livewire.user.user'
                ,['users' => $users])->extends('dashboard_layout.main');
        }

    }
}
