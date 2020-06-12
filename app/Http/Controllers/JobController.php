<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Job;
use App\Category;
use App\Company;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $howMany = Job::count();

        $jobs = DB::table('jobs')->select('id','id_cat','id_com','j_title','j_hours','j_salary',
        'j_discription','j_location','j_active')->get();

        return view('Jobs.joblist',compact('jobs','howMany'));
    }

    public function jobDetails($id){
        $details = Job::find($id);
        $jobCategory = $details->id_cat;
        $jobCompany = $details->id_com;
        $categoryDetails = Category::find($jobCategory);
        $ownerDetails = Company::find($jobCompany);
        return view('Jobs.jobDetails',compact('details','categoryDetails','ownerDetails'));
    }


    public function filterData(Request $request){
        return $request;
    }
    public function searchFilter(Request $request){
        return $request;
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
        $request->validate($this->validationRules());

        $job = new Job;
        $company = new Company;

        $company->name = $request->name_com;
        $company->location = $request->location_com;

        $company->save();

        $job->id_cat = Category::get('id')->random();
        $job->id_com = $company->id;
        $job->j_title = $request->j_title;
        $job->j_hours = $request->j_hours;
        $job->j_salary = $request->j_salary;
        $job->j_discription = $request->j_discription;
        $job->j_location = $request->j_location;
        $job->j_active = 1;

        $job->save();

        return redirect()->route('jobs.joblist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //$validatedData = $request->validate($this->validationRules());
        //$job->update($validatedData);
        $input = $request->only('id_cat', 'id_com', 'j_title', 'j_hours', 'j_salary',
        'j_discription',
        'j_location',
        'j_active');

        $job->id_cat = $input['id_cat'];
        $job->id_com = $input['id_com'];
        $job->j_title = $input['j_title'];
        $job->j_hours = $input['j_hours'];
        $job->j_salary = $input['j_salary'];
        $job->j_discription = $input['j_discription'];
        $job->j_location = $input['j_location'];
        $job->j_active = $input['j_active'];

        $job->save();
        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }

    private function validationRules()
    {
        return [
            'id_cat' => 'required',
            'id_com' => 'required',
            'j_title' => 'required',
            'j_hours' => 'required',
            'j_salary' => 'required',
            'j_description' => 'required',
            'j_location' => 'required',
            'j_active' => 'required'
        ];
    }
}
