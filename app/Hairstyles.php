<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hairstyles extends Model
{
    protected $table = 'hairstyles';
    protected $primaryKey = 'hairstyle_id';

    public function category()
    {
        return $this->hasOne('App\Categories','category_id','category_id');
    }

}
