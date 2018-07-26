<?php

namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class RoleCode extends Controller
{
    const BPJS_ADMIN    = 10;
    const SATKER_ADMIN  = 20;
    const SUPER_ADMIN   = 100;

}
