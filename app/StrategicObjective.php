<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrategicObjective extends Model
{

    protected $fillable = ['description', 'dimension', 'user_id'];

    protected $appends = ['dimension_name'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getDimensionNameAttribute() {
        switch($this->dimension) {
            case 1: return 'Financiera';
            case 2: return 'Cliente';
            case 3: return 'Interna';
            case 4: return 'Aprendizaje';
        }

        return '';
    }

    public function getAlignedDescriptionAttribute() {
        return $this->aligned ?: $this->description;
    }

}
