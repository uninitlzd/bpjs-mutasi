<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionStore;
use App\Models\Submission;
use Exception;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submissions = Submission::where('user_id', auth()->user()->id)->get();
        return view('satker.submissions.index', compact('submissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('satker.submissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubmissionStore $request)
    {
        Submission::create([
            'user_id' => auth()->user()->id,
            'code' => $request->code,
            'file' => move_file($request->file('file'), 'submissions'),
            'status' => Submission::ON_PROGRESS,
        ]);

        return redirect()->back()->with('success', 'Data telah terupload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {
        return view('satker.submissions.edit', compact('submission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submission $submission)
    {
        try {
            unlink(config('variables.submissions.public').$submission->file);
        } catch (Exception $e) {

        }

        $submission->status = Submission::ON_PROGRESS;
        $submission->feedback = null;
        $submission->file = move_file($request->file('file'), 'submissions');

        $submission->save();

        return redirect()->route('admin.submissions.index')->with('success', 'Data telah diupload ulang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        try {
            unlink(config('variables.submissions.public').$submission->file);
        } catch (Exception $e) {

        }

        $submission->delete();

        return redirect()->back();
    }

    public function getFeedback(Submission $submission)
    {
        return view('satker.submissions.feedback', compact('submission'));
    }
}
