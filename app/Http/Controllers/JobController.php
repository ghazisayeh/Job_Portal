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

        $jobs = DB::table('jobs')->select('id','id_cat','id_owner','id_com','j_title','j_hours','j_salary',
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
        $output="";
        $job = DB::table('jobs')->where('j_title','LIKE','%'.$request->searchfilter."%")->get();
        return $job;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $job = new Job;
        $company = new Company;
        $category = new Category;

        $company->name = $request->name;
        $company->location = $request->location;
        $category->cat_name = $request->cat_name;

        $category->save();
        $company->save();

        $lastoneCompany =  DB::table('companies')->where('name','=',$request->name)->count();
        $CompanyWhere = DB::table('companies')->where('name','=',$request->name)->get();
        $CompnayID = $CompanyWhere[$lastoneCompany-1]->id;

        $lastoneCategory = DB::table('categories')->where('cat_name','=',$request->cat_name)->count();
        $categoryWhere = DB::table('categories')->where('cat_name','=',$request->cat_name)->get();
        $categoryID = $categoryWhere[$lastoneCategory-1]->id;


        $job->id_cat = $categoryID;
        $job->id_com = $CompnayID;
        $job->id_owner = $request->id_owner;
        $job->j_title = $request->j_title;
        $job->j_hours = $request->j_hours;
        $job->j_salary = $request->j_salary;
        $job->j_discription = $request->j_discription;
        $job->j_location = $request->j_location;
        $job->j_active = $request->j_active;
        $job->save();

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('jobs.addJob');

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
    public function destroy($id)
    {
        $todelete = Job::find($id);
        $todelete->delete();

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
