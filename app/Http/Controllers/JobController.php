<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Job;
use App\Category;
use App\Employer;
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
        ->join('employers','employers.id' ,"=" ,'jobs.j_owner')
        ->join('categories' ,'categories.id',"=" , 'jobs.j_category')
        ->get();
        return view('Jobs.joblist',compact('jobs','howMany'));
    }

    public function jobDetails($id){
        $details = Job::find($id);
        $jobCategory = $details->j_category;
        $jobOwner = $details->j_owner;
        $categoryDetails = Category::find($jobCategory);
        $ownerDetails = Employer::find($jobOwner);
        return view('Jobs.jobDetails',compact('details','categoryDetails','ownerDetails'));
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
