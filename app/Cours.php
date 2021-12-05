<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Cours extends Model
{

    public function paragraphs()
    {
        return $this->hasMany(Paragraph::class);
    }
    public function url(){
        return Storage::url($this->image);
    }
}
