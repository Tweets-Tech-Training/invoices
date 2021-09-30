<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'route',
        'action_name',
        'parent_id',
        'show_in_menu'
    ];

    function users(){
        return $this->belongsToMany(User::class,'user_links');
    }
}
