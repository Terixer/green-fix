<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'title',
        'description',
        'phone',
        'email',
        'user_id'
    ];

    protected $attributes = [
        'isAccepted' => true,
    ];

    public function pictures(){
        return $this->hasMany('App\Picture');
    }
}
