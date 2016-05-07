<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Request;
use App\Models\Applicant;
use Response;

class ApplicantController extends AppBaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Applicant.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $applicants = Applicant::where('user_id', \Auth::user()->id )->get();

        return view('applicants.index')
            ->with('applicants', $applicants);
    }

    /**
     * Show the form for creating a new Applicant.
     *
     * @return Response
     */
    public function create($job_id = null)
    {
        return view('applicants.create')
                ->with('job_id', $job_id);
    }

    /**
     * Store a newly created Applicant in storage.
     *
     * @param CreateApplicantRequest $request
     *
     * @return Response
     */
    public function store()
    {
        $data = Request::all();

        $data['status'] = 'new';

        $data['user_id'] = \Auth::user()->id;

        $applicant =  Applicant::create($data);

        \Session::flash('success','Applicant saved successfully.');

        return redirect(route('applicants.index'));
    }

    /**
     * Display the specified Applicant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $applicant = Applicant::find($id);

        if (empty($applicant)) {
            \Session::flash('error','Applicant not found');

            return redirect(route('applicants.index'));
        }

        return view('applicants.show')->with('applicant', $applicant);
    }

    /**
     * Show the form for editing the specified Applicant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $applicant = Applicant::find($id);

        if (empty($applicant)) {
            \Session::flash('error','Applicant not found');

            return redirect(route('applicants.index'));
        }

        return view('applicants.edit')->with('applicant', $applicant);
    }

    /**
     * Update the specified Applicant in storage.
     *
     * @param  int              $id
     * @param UpdateApplicantRequest $request
     *
     * @return Response
     */
    public function update($id)
    {
        $applicant = Applicant::find($id);

        if (empty($applicant)) {
            \Session::flash('error','Applicant not found');

            return redirect(route('applicants.index'));
        }

        $data = Request::all();

        $data['user_id'] = \Auth::user()->id;

        $applicant->update(Request::all());

        if( Request::ajax() ){
          return response()->json(['status' => 'ok']);
        }

        \Session::flash('success','Applicant updated successfully.');

        return redirect(route('applicants.index'));
    }

    /**
     * Remove the specified Applicant from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $applicant = Applicant::find($id);

        if (empty($applicant)) {
            \Session::flash('error','Applicant not found');

            return redirect(route('applicants.index'));
        }

        Applicant::destroy($id);

        \Session::flash('success','Applicant deleted successfully.');

        return redirect(route('applicants.index'));
    }
}
