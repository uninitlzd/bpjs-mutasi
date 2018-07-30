<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'satker';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function departemen()
    {
        return $this->belongsTo(DepartemenSatker::class, 'departemen_satker_id');
    }
}
