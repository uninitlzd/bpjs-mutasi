<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Exception;
use Illuminate\Http\Request;

class SubmissionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->status;
        if (isset($request->status)) {
            $submissions = Submission::where('status', $filter)->get();
        } else {
            $submissions = Submission::get();
        }

        return view('admin.submissions.index', compact('submissions', 'filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approve(Submission $submission)
    {
        $submission->status = Submission::APPROVED;
        $submission->save();



        try {
            unlink(config('variables.submissions_feedback.public').$submission->feedback_file);
        } catch (Exception $e) {

        }

        return redirect()->back()->with('success', 'Submission ' . $submission->id . ' Approved');
    }

    public function getReject(Submission $submission)
    {
        return view('admin.submissions.reject', compact('submission'));
    }

    public function doReject(Request $request, Submission $submission)
    {
        $submission->status = Submission::REJECTED;
        $submission->feedback = $request->feedback;

        if (isset($request->feedback_file)) {
            $submission->feedback_file = move_file($request->feedback_file, 'submissions_feedback');
        }

        $submission->save();

        return redirect()->route('admin.submission_history.index')->with('Success', 'Data' . $submission->id . 'ditolak');
    }

    public function periksa(Submission $submission){
        $submission->admin_id = auth()->user()->id;
        $submission->save();
        return redirect()->route('admin.submission_history.index');
    }

}
