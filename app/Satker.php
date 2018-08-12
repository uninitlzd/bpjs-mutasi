<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'satker';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function departemen()
    {
        return $this->belongsTo(DepartemenSatker::class, 'departemen_satker_id');
    }

    public function status()
    {
        return $this->belongsTo(StatusSatker::class, 'status_satker_id');
    }
}
