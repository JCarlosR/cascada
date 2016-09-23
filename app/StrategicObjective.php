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

    // Many to many relationship
    public function corporateGoals()
    {
        return $this->belongsToMany('App\CorporateGoal', 'corporate_goal_strategic_objective', 'objective_id', 'goal_id')
            ->withTimestamps();
    }

    public function corporateObjectives()
    {
        return $this->hasMany('App\CorporateObjective', 'objective_id');
    }
}
