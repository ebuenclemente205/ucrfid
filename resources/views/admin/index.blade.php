@extends('master')
@section('title', 'User List')

@section('content')

  <div class="container col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Users List </h2>
        </div>
        @if($users->isEmpty())
          <div class="alert alert-info" role="alert">
            No Users Available Yet!
          </div>
        @else
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>Employee No.</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                  <tr>
                    <td> {!! $user->emp_id !!} </td>
                    <td> {!! $user->fullName !!} </td>
                    <td> {!! $user->department->colName !!}</td>
                    <td> {!! $user->position !!} </td>
                    <td>
                        @if($user->status  == 1)
                          Active
                        @else
                          Inactive
                        @endif
                    </td>
                    <td>
                      <a href="{!! action('AdminController@edit', $user->id) !!}">
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
