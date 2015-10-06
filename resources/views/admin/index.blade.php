@extends('master')
@section('title', 'Users List')

@section('content')

  <div class="container col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Users List </h2>
        </div>
        @if($employees->isEmpty())
          <p> fail </p>
        @else
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>Employee No.</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                  <tr>
                    <td> {!! $employee->id !!} </td>
                    <td> {!! $employee->lastName !!},  {!! $employee->firstName !!} </td>
                    <td> {!! $employee->colName !!}</td>
                    <td> {!! $employee->position !!} </td>
                    <td>
                      <a href="#">
                          <span class="mdi-content-create" aria-hidden="true"></span>
                      </a>
                      <a href="#">
                          <span class="mdi-action-delete" aria-hidden="true"></span>
                      </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        @endif

    </div>
  </div>

@endsection
