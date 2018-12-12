<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Friends extends Model
{
//    public function friendsOfMine()
//    {
//        return $this->belongsToMany('Models\Friends','friend_list','user_id','friend_id');
//    }
//    public function friendsOf()
//    {
//        return $this->belongsToMany('Models\Friends','friend_list','user_id','friend_id','user_id');
//    }
//    public function friends()
//    {
//        return $this->friendsOfMine()->wherePivot('accepted', true)->get()->merge($this->friendsOf()->wherePivot('accepted', true)->get());
//    }


    protected $fillable = ['user_id','friend_id','accepted'];


}
