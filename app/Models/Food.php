<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\HasFactory;

class Food extends Model
{

    protected $filable = ['name','price','ingredients','description','vegan','spicy','availability','visibility','slug'];


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }


    // use HasFactory;
    use SoftDeletes;

}
