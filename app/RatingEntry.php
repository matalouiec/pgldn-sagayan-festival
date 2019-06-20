<?php

namespace psfc;

use Illuminate\Database\Eloquent\Model;

class RatingEntry extends Model
{
    protected $table = 'rating_entry';

    public function Rating(){
        return $this->belongsTo('psfc\Rating');
    }
}
