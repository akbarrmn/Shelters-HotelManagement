<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class news extends Model
{
    protected $table = 'news';
    use SoftDeletes;
    protected $fillable = [
        'title', 'image', 'about'
    ];

    protected $hidden = [

    ];

}
