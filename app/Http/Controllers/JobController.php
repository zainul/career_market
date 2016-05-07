<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Request;
use App\Models\Job;
use Response;

class JobController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the Job.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $jobs = Job::all();
        return view('jobs.index')
            ->with('jobs', $jobs);
    }

    /**
     * Display a listing of the Job with Applicant.
     *
     * @param Request $request
     * @return Response
     */
    public function applicants($id = null)
    {
        $jobs = Job::where('id', $id)->with('applicants')->first();
        return view('jobs.applicants')
            ->with('applicants', $jobs->applicants);
    }

    /**
     * Show the form for creating a new Job.
     *
     * @return Response
     */
    public function create()
    {
        return view('jobs.create')
                ->with('currencies', $this->currency())
                ->with('categories', $this->category())
                ->with('locations', $this->location())
                ->with('employmentTypes', $this->employmentType())
                ->with('industries', $this->industry())
                ->with('experienceLevels', $this->experienceLevel())
                ->with('functionals', $this->functional())
                ->with('educations', $this->education());
    }

    /**
     * Store a newly created Job in storage.
     *
     * @param CreateJobRequest $request
     *
     * @return Response
     */
    public function store()
    {
        $data = Request::all();

        $data['company_id'] = \Auth::user()->company()[0]->id;

        Job::create($data);

        \Session::flash('success','Job saved successfully.');

        return redirect(route('jobs.index'));
    }

    /**
     * Display the specified Job.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $job = Job::find($id);

        if (empty($job)) {
            \Session::flash('error','Job not found');
            return redirect(route('jobs.index'));
        }

        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified Job.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $job = Job::find($id);

        if (empty($job)) {
            \Session::flash('error','Job not found');

            return redirect(route('jobs.index'));
        }

        return view('jobs.edit')
                      ->with('job', $job)
                      ->with('currencies', $this->currency())
                      ->with('categories', $this->category())
                      ->with('locations', $this->location())
                      ->with('employmentTypes', $this->employmentType())
                      ->with('industries', $this->industry())
                      ->with('experienceLevels', $this->experienceLevel())
                      ->with('functionals', $this->functional())
                      ->with('educations', $this->education());
    }

    /**
     * Update the specified Job in storage.
     *
     * @param  int              $id
     * @param UpdateJobRequest $request
     *
     * @return Response
     */
    public function update($id)
    {
        $job = Job::find($id);

        if (empty($job)) {
            \Session::flash('error','Job not found');

            return redirect(route('jobs.index'));
        }

        $data = Request::all();

        $data['company_id'] = \Auth::user()->company()[0]->id;

        $job->update($data);

        \Session::flash('success','Job updated successfully.');

        return redirect(route('jobs.index'));
    }

    /**
     * Remove the specified Job from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);

        if (empty($job)) {
            \Session::flash('error','Job not found');

            return redirect(route('jobs.index'));
        }

        $job->delete();

        \Session::flash('success','Job deleted successfully.');

        return redirect(route('jobs.index'));
    }
}
