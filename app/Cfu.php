<?php

namespace Findcfu;

use Illuminate\Database\Eloquent\Model;

class Cfu extends Model
{
    protected $table = 'cfus';
    protected $fillable = [
        'working_hour',
        'propic',
        'intro'
        ];

    protected $guarded = [
        'rating',
        'rated_by'
    ];
    public function user(){
        return $this->belongsTo('Findcfu\User');
    }
    public function skills($cfuID){
        return Cfu::find($cfuID)->skills;
    }



}
