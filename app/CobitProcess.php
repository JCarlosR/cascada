<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CobitProcess extends Model
{

    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = ['description'];

    public function tiGoals()
    {
        return $this->belongsToMany('App\TiGoal')->withTimestamps();;
    }

}
