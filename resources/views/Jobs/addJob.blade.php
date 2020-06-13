@extends('layouts.app')

@section('content')
   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add job') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('jobs.store')}}">

                        @csrf
                        @method('POST')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                            <input  value ="{{auth()->user()->id}}" id="id_owner" type="text" class="form-control @error('name') is-invalid @enderror" name="id_owner" hidden>

                                @error('id_owner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Company Location') }}</label>

                            <div class="col-md-6">
                                <input id="location	" type="text" class="form-control @error('location') is-invalid @enderror" name="location">

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="cat_name" class="col-md-4 col-form-label text-md-right">{{ __('Job Category') }}</label>

                            <div class="col-md-6">
                                <input id="cat_name" type="text" class="form-control @error('cat_name') is-invalid @enderror" name="cat_name">

                                @error('cat_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="j_title" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>

                            <div class="col-md-6">
                                <input id="j_title" type="text" class="form-control @error('j_title') is-invalid @enderror" name="j_title">

                                @error('j_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="j_hours" class="col-md-4 col-form-label text-md-right">{{ __('Number of Hours') }}</label>

                            <div class="col-md-6">
                                <input id="j_hours" type="number" class="form-control @error('j_hours') is-invalid @enderror" name="j_hours">

                                @error('j_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="j_salary" class="col-md-4 col-form-label text-md-right">{{ __('Job Salary') }}</label>

                            <div class="col-md-6">
                                <input id="j_salary" type="number" class="form-control @error('j_salary') is-invalid @enderror" name="j_salary">

                                @error('j_salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="j_location" class="col-md-4 col-form-label text-md-right">{{ __('Job Location') }}</label>

                            <div class="col-md-6">
                                <input id="j_salary" type="text" class="form-control @error('j_location') is-invalid @enderror" name="j_location">

                                @error('j_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="j_discription" class="col-md-4 col-form-label text-md-right">{{ __('Job Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="j_discription" type="text" class="form-control @error('j_discription') is-invalid @enderror" rows="5" name="j_discription"></textarea>

                                @error('j_discription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="j_active" class="col-md-4 col-form-label text-md-right">{{ __('Active ?') }}</label>

                            <div class="col-md-6">
                                <select class="form-control form-control-sm" name="j_active" id="j_active">
                                    <option value="1" selected="selected">Yes</option>
                                    <option value="0" >No</option>
                                </select>
                                @error('j_active')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="genric-btn danger-border circle">
                                    {{ __('Add Job') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@php

@endphp
@endsection
