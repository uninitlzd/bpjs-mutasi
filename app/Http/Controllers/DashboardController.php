<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $month = ($request->month) ? $request->month: Carbon::now()->month;
        $year = ($request->year) ? $request->year : Carbon::now()->year;

        if (isset($request->month)) {
            $submissions = Submission::whereMonth('created_at', $month)
                                        ->whereYear('created_at', $year)
                                         ->get();
        } else  {
            $submissions = Submission::get();
        }


        $data = ($submissions->count()) ? $submissions->count() : 0 ;
        $dataBeingProcessed = $submissions->where('status', Submission::ON_PROGRESS)->count();
        $dataAccepted = $submissions->where('status', Submission::APPROVED)->count();
        $dataRejected = $submissions->where('status', Submission::REJECTED)->count();

        $presentaseJenis = [
            1 => 0,
            2 => 0,
            3 => 0,
            5 => 0,
            6 => 0,
            8 => 0,
            9 => 0,
            991 => 0,
            992 => 0,
            993 => 0
        ];


        foreach ($presentaseJenis as $key => $value)
        {
            $jumlah = $submissions->where('code', $key)->count();
            $presentaseJenis[$key] = ($jumlah / $data) * 100;
        }


        return view('admin.dashboard.index', compact('data', 'dataAccepted', 'dataBeingProcessed', 'dataRejected', 'presentaseJenis'));
    }
}
