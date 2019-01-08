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
        'user_id',
        'is_active'
    ];

    protected $attributes = [
        'is_active' => true,
    ];

    public function pictures(){
        return $this->hasMany('App\Picture');
    }

    public static function showAllAdvertisementsBelongTo($user){
            return Advertisement::where('user_id',$user->id)
                ->orderBy('is_active', 'desc')
                ->orderBy('created_at', 'desc')
                ->get();

    }
}
