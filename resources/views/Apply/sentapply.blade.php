@extends('layouts.app')

@section('content')
   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Apply') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('Apply.store')}}">

                        @csrf
                        @method('POST')

                        <input id="id_j" type="text" class="form-control @error('id_j') is-invalid @enderror" name="id_j" value="{{ $_GET['id'] }}" required autocomplete="id_j" hidden>

                        <div class="form-group row">
                            <label for="txt" class="col-md-4 col-form-label text-md-right">{{ __('Talk about your self') }}</label>

                            <div class="col-md-6">
                                <input id="txt" type="text" class="form-control @error('txt') is-invalid @enderror" name="txt" value="{{ old('txt') }}" required autocomplete="txt">

                                @error('txt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="genric-btn danger-border circle">
                                    {{ __('Sent') }}
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
