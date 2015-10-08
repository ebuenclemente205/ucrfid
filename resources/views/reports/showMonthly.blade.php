@extends('master')
@section('title', 'Monthly Report')

@section('content')

  <div class="container col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Monthly Report </h2>
        </div>
        @foreach($errors->all() as $error)
            <p class="alert alert-danger"> {{ $error }}</p>
        @endforeach
        @if ($ctrs->isEmpty())
            <p class="alert alert-danger"> There are no logs.</p>
        @else
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
