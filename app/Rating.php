<?php

namespace psfc;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'rating';

    public function RatingEntries(){
        return $this->hasMany('psfc\RatingEntry','parentid');
    }

    public function Contestant(){
        return $this->belongsTo('psfc\Contestant','contestantid');
    }
}
