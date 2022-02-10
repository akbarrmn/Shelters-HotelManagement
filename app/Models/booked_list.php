<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class booked_list extends Model
{
    protected $table = 'booked_list';
    use SoftDeletes;
    protected $fillable = [
        'catalog_room_id', 'id', 'nama', 'ktp', 'nohp', 'checkin','checkout','lama_menginap'
    ];

    protected $hidden = [

    ];

    public function catalog_room(){
        return $this -> belongsTo(catalog_room::class, 'catalog_room_id', 'id');
    }

    public function ambil(){
        $data = booked_list::get();

        return $data;
    }


}
