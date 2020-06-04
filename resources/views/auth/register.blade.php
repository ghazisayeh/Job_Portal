@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="ee_fn" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="ee_fn" type="text" class="form-control @error('ee_fn') is-invalid @enderror" name="ee_fn" value="{{ old('ee_fn') }}" required autocomplete="ee_fn" autofocus>

                                @error('ee_fn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ee_ln" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="ee_ln" type="text" class="form-control @error('ee_ln') is-invalid @enderror" name="ee_ln" value="{{ old('ee_ln') }}" required autocomplete="ee_ln" autofocus>

                                @error('ee_ln')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ee_adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="ee_adresse" type="text" class="form-control @error('ee_adresse') is-invalid @enderror" name="ee_adresse" value="{{ old('ee_adresse') }}" required autocomplete="ee_adresse">

                                @error('ee_adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ee_phno" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="ee_phno" type="text" class="form-control @error('ee_phno') is-invalid @enderror" name="ee_phno" value="{{ old('ee_phno') }}" required autocomplete="ee_phno">

                                @error('ee_phno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ee_current_location" class="col-md-4 col-form-label text-md-right">{{ __('Current Location') }}</label>

                            <div class="col-md-6">
                                <input id="ee_current_location" type="text" class="form-control @error('ee_current_location') is-invalid @enderror" name="ee_current_location" value="{{ old('ee_current_location') }}" required autocomplete="ee_current_location">

                                @error('ee_current_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ee_annual_salary" class="col-md-4 col-form-label text-md-right">{{ __('Annual Salary') }}</label>

                            <div class="col-md-6">
                                <input id="ee_annual_salary" type="text" class="form-control @error('ee_annual_salary') is-invalid @enderror" name="ee_annual_salary" value="{{ old('ee_annual_salary') }}" required autocomplete="ee_annual_salary">

                                @error('ee_annual_salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ee_pic" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                            <div class="col-md-6">
                                <input id="ee_pic" type="file" class="form-control @error('ee_pic') is-invalid @enderror" name="ee_pic" value="{{ old('ee_pic') }}" required autocomplete="ee_pic">

                                @error('ee_pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>ee_fn
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="genric-btn danger-border circle">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
