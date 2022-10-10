<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\EmploymentType;
use App\Models\Job;
use App\Models\User;
use App\Models\Entry;
use App\Models\Occupation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\EntryMail;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        $companies = Company::all();
        $occupations = Occupation::all();
        return view(
            'user.job.index',
            [
                'jobs' => $jobs,
                'companies' => $companies,
                'occupations' => $occupations,
            ]
        );
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
        $job = Job::findOrFail($id);
        $occupations = Occupation::all();
        $companies = Company::all();
        $employments = EmploymentType::all();
        return view(
            'user.job.show',
            compact(
                'job',
                'occupations',
                'companies',
                'employments',
            )
        );
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

    public function entry(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $entry = new Entry;
        $entry->job_id = $id;
        $entry->user_id = Auth::id();
        $entry->status = 1;

        $entry->save();


        $mailAddress =  Auth::user()->email;
        Mail::to($mailAddress)
            ->send(new EntryMail());

        return redirect()->route('user.job.show', ['job' => $job->id])->with('message', 'エントリーされました。');
    }
}
