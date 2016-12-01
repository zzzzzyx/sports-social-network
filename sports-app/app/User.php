<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getName($id){
        $launcherName = User::where('id', '=', $id)->get()[0]->name;
        return $launcherName;
    }

    public static function getBlurList($idList){
        foreach ($idList as $one){
            $b = new BlurUser;
            $b->id = $one;
            $b->name = User::where('id', '=', $one)->get()[0]->name;
            $b->pic = User::where('id', '=', $one)->get()[0]->image;
            $blurUserList[] = $b;
        }
        return $blurUserList;
    }
}

class BlurUser{
    public $name;
    public $pic;
    public $id;
}

