@extends('master')
@section('title', 'Create User')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    @if(session('status') == '1')
      <div class="alert alert-success">
          <p> User successfully registered </p>
      </div>
    @elseif(session('status') == '0')
      <div class="alert alert-warning">
          <p> User already registered </p>
      </div>
    @endif
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>  User {{ $user->id }} </h2>

          <div class="row">
              <div class="col-sm-3">
                <b>Emp No.:</b>
              </div>
              <div class="col-sm-9">
                {!! $user->emp_id !!}
              </div>
          </div>

          <div class="row">
              <div class="col-sm-3">
                <b>Name:</b>
              </div>
              <div class="col-sm-9">
                 {!! $user->fullName !!}
              </div>
          </div>

          <div class="row">
              <div class="col-sm-3">
                <b>Department:</b>
              </div>
              <div class="col-sm-9">
                 {!! $user->department->colName !!}
              </div>
          </div>

          <div class="row">
              <div class="col-sm-3">
                <b>Position:</b>
              </div>
              <div class="col-sm-9">
                 {!! $user->position !!}
              </div>
          </div>

          <div class="row">
             <div class="col-sm-3">
                  <b>Status:</b>
               </div>

              <div class="col-sm-9">
                  @if ($user->status != 0)
                    <p> Active </p>
                  @else
                    <p> Inactive </p>
                  @endif
              </div>
          </div>
          <div class="form-group">
            <a class="btn btn-primary" href="{!! action('AdminController@edit', $user->id) !!}">Update</a>
            <button type="submit" class="btn btn-default">Cancel</button>
          </div>
      </div>
    </div>
  </div>

@endsection
