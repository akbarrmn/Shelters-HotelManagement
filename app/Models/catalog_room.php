<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class catalog_room extends Model
{
    protected $table = 'catalog_room';
    use SoftDeletes;
    protected $fillable = [
        'title', 'image', 'price', 'jumlah', 'kamar_digunakan', 'about'
    ];

    protected $hidden = [

    ];

    public function booked_list(){
        return $this->hasMany(booked_list::class,'catalog_room_id', 'id');
    }
}
