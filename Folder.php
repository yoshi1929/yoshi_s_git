<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    //モデルクラスのリレーション
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
