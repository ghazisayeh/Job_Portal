<?php

namespace App\Http\Controllers;

use Auth;
use App\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $ownerId = Auth::user()->id;
        $data = DB::table('jobs')
        ->join('categories' ,'categories.id', 'jobs.id_cat' )
        ->select('jobs.id','jobs.j_title','jobs.j_hours','jobs.j_salary','j_active','categories.cat_name')
        ->where('id_owner','=',$ownerId)->get();


        $data2 = DB::table('applies')
        ->join('jobs' , 'jobs.id', '=' ,'applies.id_j')
        ->join('users' ,'users.id' , "=", 'applies.id_u')
        ->select('jobs.j_title','jobs.j_salary' , 'jobs.j_hours' , 'users.email' , 'applies.text' , 'applies.id')
        ->where('jobs.id_owner','=',$ownerId)->get();


        return view('Apply.apply',compact('data','data2'));
    }


    public function notification(){

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
     * @param  \App\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function show(Apply $apply)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function edit(Apply $apply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apply $apply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apply $apply)
    {
        $apply->delete();
        return redirect()->route('Apply.index');
    }
}
