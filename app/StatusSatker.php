<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusSatker extends Model
{
    protected $table = 'status_satker';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
