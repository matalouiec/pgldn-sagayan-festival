<?php

namespace psfc;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function levels(){
        return $this->belongsTo('psfc\Level');
    }

    public function criterias(){
        return $this->hasMany('psfc\Criteria');
    }
}
