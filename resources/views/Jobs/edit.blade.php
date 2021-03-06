@extends('layouts.app')

@section('content')
   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jobs.update', $job->id) }}">

                        @csrf
                        @method('PATCH')

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="id_cat" type="text" class="form-control @error('id_cat') is-invalid @enderror" name="id_cat" value="{{ old('id_cat') ?? $job->id_cat }}" required autocomplete="id_cat" hidden>

                                @error('id_cat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="id_com" type="text" class="form-control @error('id_com') is-invalid @enderror" name="id_com" value="{{ old('id_com') ?? $job->id_com }}" required autocomplete="id_com" hidden>

                                @error('id_com')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="j_title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="j_title" type="text" class="form-control @error('j_title') is-invalid @enderror" name="j_title" value="{{ old('j_title') ?? $job->j_title }}" required autocomplete="j_title">

                                @error('j_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="j_hours" class="col-md-4 col-form-label text-md-right">{{ __('Hours') }}</label>

                            <div class="col-md-6">
                                <input id="j_hours" type="text" class="form-control @error('j_hours') is-invalid @enderror" name="j_hours" value="{{ old('j_hours') ?? $job->j_hours }}" required autocomplete="j_hours">

                                @error('j_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="j_salary" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                            <div class="col-md-6">
                                <input id="j_salary" type="text" class="form-control @error('j_salary') is-invalid @enderror" name="j_salary" value="{{ old('j_salary') ?? $job->j_salary }}" required autocomplete="j_salary">

                                @error('j_salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="j_discription" class="col-md-4 col-form-label text-md-right">{{ __('Discription') }}</label>

                            <div class="col-md-6">
                                <input id="j_discription" type="text" class="form-control @error('j_discription') is-invalid @enderror" name="j_discription" value="{{ old('j_discription') ?? $job->j_discription }}" required autocomplete="j_discription">

                                @error('j_discription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="j_location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input id="j_location" type="text" class="form-control @error('j_location') is-invalid @enderror" name="j_location" value="{{ old('j_location') ?? $job->j_location }}" required autocomplete="j_location">

                                @error('j_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="j_active" class="col-md-4 col-form-label text-md-right">{{ __('Active') }}</label>

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
                                    {{ __('Edit') }}
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
