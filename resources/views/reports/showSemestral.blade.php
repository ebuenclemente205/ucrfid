@extends('master')
@section('title', 'Semestral Report')

@section('content')

  <div class="container col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Semestral Report </h2>
        </div>
        @if ($ctrs->isEmpty())
            <p class="alert alert-danger"> There are no logs.</p>
        @else
        @foreach($errors->all() as $error)
            <p class="alert alert-danger"> {{ $error }}</p>
        @endforeach
        <table class="table table-striped">
          <thead>
              <tr>
                  <th>Date</th>
                  <th>Course</th>
                  <th>Gender</th>
                  <th>No. of Logins</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($ctrs as $ctr)
              <tr>
                  <td>{!! $ctr->date !!}</td>
                  <td>{!! $ctr->Course !!}</td>
                  <td>{!! $ctr->gender ? 'Male' : 'Female' !!}</td>
                  <td>{!! $ctr->ctr !!}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @endif
    </div>
  </div>

@endsection
