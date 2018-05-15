<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    //
    protected $table = 'bann';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
