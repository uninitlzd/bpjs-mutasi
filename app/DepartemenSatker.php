<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartemenSatker extends Model
{
    protected $table = 'departemen_satker';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
