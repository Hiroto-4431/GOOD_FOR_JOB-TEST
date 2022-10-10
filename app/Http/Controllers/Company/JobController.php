<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\EmploymentType;
use App\Models\Occupation;
use App\Models\Feature;
use App\Models\Job;
use App\Models\Entry;
use App\Models\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View as FacadesView;
use InterventionImage;
use Illuminate\Support\Str;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:companies');

        $this->middleware(function ($request, $next) {
            $id = $request->route()->parameter('job');
            if (!is_null($id)) {
                $jobCompanyId = Job::findOrFail($id)->company->id;
                $jobId = (int)$jobCompanyId;
                $companyId = Auth::id();
                if ($jobId !== $companyId) {
                    abort(404);
                }
            }
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::where('company_id', Auth::id())->paginate(5);
        $occupations = Occupation::all();

        return view(
            'company.job.index',
            compact(
                'jobs',
                'occupations',

            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $occupations = Occupation::all();
        $employment_types = EmploymentType::all();
        $features = Feature::all();
        $jobs = Job::all();
        return view(
            'company.job.create',
            [
                'occupations' => $occupations,
                'employment_types' => $employment_types,
                'features' => $features,
                'jobs' => $jobs,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 入力値の受け取り
        $input = $request->all();
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'message' => ['required'],
            'occupation_id' => ['required'],
            'employment_type_id' => ['required'],
            'access' => ['required'],
            'salary' => ['required'],
            // 'feature_id' => ['required'],
            'job_description' => ['required'],
        ]);

        $companyId = Auth::id();

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $file_token = Str::random(32);
        $filename = $file_token . '.' . $extension;
        $request->image->storeAs('public/job', $filename);


        $job = new Job;
        $job->company_id = $companyId;
        $job->title = $request->title;
        $job->message = $request->message;
        $job->occupation_id = $request->occupation_id;
        $job->employment_type_id = $request->employment_type_id;
        $job->image = $filename;
        $job->access = $request->access;
        $job->salary = $request->salary;
        $job->job_description = $request->job_description;
        $job->status = $request->status;
        $job->save();

        $job->features()->sync($request->feature_ids);



        return redirect()
            ->route('company.job.index');
        // ->width('message', '求人登録が完了しました');
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
        $occupations = Occupation::all();
        $employment_types = EmploymentType::all();
        $features = Feature::all();

        $job = Job::findOrFail($id);


        return view(
            'company.job.edit',
            compact(
                'occupations',
                'employment_types',
                'features',
                'job'
            )
        );
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
        $job = Job::findOrFail($id);
        $job->title = $request->title;
        $job->message = $request->message;
        $job->occupation_id = $request->occupation_id;
        // $job->employment_type = $request->employment_type;
        $job->access = $request->access;
        $job->salary = $request->salary;
        $job->job_description = $request->job_description;
        $job->save();

        return redirect()
            ->route('company.job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::findOrFail($id)->delete();
        return redirect()->route('company.job.index');
    }
}
