<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Paragraph extends Model
{
    public function cours5()
    {
        return
        $this->belongsTO(Cours::class);
    }
    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function url(){
        return Storage::url($this->image);
    }
}
