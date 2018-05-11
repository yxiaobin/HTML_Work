<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiezi extends Model
{
    //
    protected $table = 'tiezi';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function commits(){
        return $this->hasMany('App\Commit','commit_id','id' );
    }
}
