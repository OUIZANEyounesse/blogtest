<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Participant;
use App\Image;
use App\Scopes\DateDebutScope;

class Annonce extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'date_debut',
        // 'date_fin',
        'title',
        'contenu',
        // 'participant_id',
        // 'admine_cin',
        // 'image_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'id' => 'integer',
    //     'id_participant' => 'integer',
    //     'id_image' => 'integer',
    // ];


    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }


    public function images(){
        return $this->morphMany('App\Image', 'imageable');
    }

    public function admine(){
        $this->belongsTo(Admine::class,'admine_cin');
    }
 /// addign scop global :: qui permmet de donner list ascendent par date_debut
    protected static function booted()
    {
        // static::addGlobalScope(new DateDebutScope());
    }
}
