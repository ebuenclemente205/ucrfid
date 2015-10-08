@extends('master')
@section('title', 'Reports')

@section('content')

  <div class="container col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Reports </h2>
        </div>
        @foreach($errors->all() as $error)
            <p class="alert alert-danger"> {{ $error }}</p>
        @endforeach
        @if ($ctrs->isEmpty())
            <p> There is no logs.</p>
        @else
        <table class="table table-striped">
          <thead>
              <tr>
                  <th>Date</th>
                  <th>No. of Logins</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($ctrs as $ctr)
              <tr>
                  <td>{!! $ctr->date !!}</td>
                  <td>{!! $ctr->ctr !!}</td>
              </tr>
            @endforeach
              <!-- <tr>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr>
              <tr>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr>
              <tr>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr>
              <tr>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr> -->
          </tbody>
        </table>
        @endif
    </div>
  </div>

@endsection
