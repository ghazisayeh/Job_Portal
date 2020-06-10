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
        $jobs = DB::table('jobs')
        ->join('companies','companies.id' ,"=" ,'jobs.id_com')
        ->join('categories' ,'categories.id',"=" , 'jobs.id_cat')
        ->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
