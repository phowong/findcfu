<?php

namespace Findcfu;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $fillable = [
        'skill_level',
        'category',
        'subcategory',
    ];

    //establish relationship
    public function cfus(){
        return $this->belongsToMany('Findcfu\Cfu');
    }

    //Query Scope
    public function scopeOfSkills($query,$skill_id){
        return $query->where('cfu_id','=',$skill_id);
    }
}
