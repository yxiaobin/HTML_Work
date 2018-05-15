<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    //
    protected $table = 'artical';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
