<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable = [
        'alt','src'
    ];

    public function imageable(){
        return $this->morphTo();
    }

    public function url(){
        return Storage::url($this->src);
    }

}
