@extends('layouts.app')
@section('content')
<div class="container">
  <div class="weposted mb-5">
    <div class="row mt-4 mb-2">
        <div class="col-md-5 ml-5">
            <h3 > Table of Jobs we Post</h3>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <input type="text" id="myInput" class="form-control" onkeyup="search()" placeholder="Search for Title.." title="Type in a Title">
            </div>
        </div>


    </div>
    <table id="ourJobTable" class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Hours</th>
            <th scope="col">Salary</th>
            <th scope="col">Active</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                <td> {{$item->j_title}}</td>
                <td> {{$item->j_hours}}</td>
                <td> {{$item->j_salary}}</td>
                <td> {{$item->j_active}}</td>
                <td>
                    <a href="{{ route('jobs.edit', $item->id) }}">  <i class="far fa-edit text-success"></i>  </a>
                    <a href="{{ route('jobs.destroy', $item->id) }}"
                        onclick="event.preventDefault();
                        document.querySelector('#delete-job-form').submit();"
                        >   <i class="fas fa-trash-alt ml-5" style='color:red'></i>
                    </a>
                    <form id="delete-job-form" action="{{ route('jobs.destroy', $item->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>



  <div class="applies mt-5">
    <div class="row mt-4 mb-2">
        <div class="col-md-5 ml-5 mt-5">
            <h3 > New Apply</h3>
        </div>
        <div class="col-md-4  mt-5">
            <div class="input-group">
                <input type="text" id="myInput2" class="form-control" onkeyup="search2()" placeholder="Search for email.." title="Type in a Title">
            </div>
        </div>


    </div>
    <table id="applies" class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">email</th>
            <th scope="col">title</th>
            <th scope="col">User Description</th>
            <th scope="col">yes</th>
            <th scope="col">no</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data2 as $item)
                <tr>
                <td> {{$item->email}}</td>
                <td> {{$item->j_title}}</td>
                <td> {{$item->text}}</td>
                <td>
                    <a href="{{ route('jobs.edit', $item->id) }}"> <i class="fas fa-check-circle" style='color:green'></i> </a>

                </td>
                <td>
                    <a href="{{ route('Apply.destroy', $item->id) }}"
                        onclick="event.preventDefault();
                        document.querySelector('#reject-form').submit();"
                        >   <i class="fas fa-times-circle" style='color:red'></i>
                    </a>
                    <form id="reject-form" action="{{ route('Apply.destroy', $item->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>

</div>

<script>
function search() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("ourJobTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function search2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("applies");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>




@endsection
