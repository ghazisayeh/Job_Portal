@extends('layouts.app')
@section('content')

<div class="container">
    @if (session('clearNotification'))
        <div class="alert alert-success">
            {{ session('clearNotification') }}
        </div>
    @endif
    <div class="weposted mb-5">
        <div class="row mt-4 mb-5">
            <div class="col-md-5 ml-5">
                <h3 > Notifications : </h3>
            </div>
            <div class="col-md-4 ml-5">
                <a  class="genric-btn danger" href="{{route('clearNotificaton')}}"
                    onclick="event.preventDefault();
                    document.querySelector('#clearNotification').submit();"
                    > Clear Notifications
                </a>

            <form id="clearNotification" action="{{route('clearNotificaton')}}" style="display: none;">
                    @csrf
                </form>
            </div>


        </div>
        <table id="ourJobTable" class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">notification content</th>
                <th scope="col">Date :</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td> {{$item->notificationcontent}}</td>
                        <td> {{$item->created_at}}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>


@endsection
