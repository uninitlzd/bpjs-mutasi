<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Submission::get()->count();
        $dataBeingProcessed = Submission::where('status', Submission::ON_PROGRESS)->get()->count();
        $dataAccepted = Submission::where('status', Submission::APPROVED)->get()->count();
        $dataRejected = Submission::where('status', Submission::REJECTED)->get()->count();

        return view('admin.dashboard.index', compact('data', 'dataAccepted', 'dataBeingProcessed', 'dataRejected'));
    }
}
