@extends('master')
@section('title', 'Users List')

@section('content')

  <div class="container col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Users List </h2>
        </div>

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
              <tr>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>
                      <a href="#">
                          <span class="mdi-content-create" aria-hidden="true"></span>
                      </a>
                      <a href="#">
                          <span class="mdi-action-delete" aria-hidden="true"></span>
                      </a>
                  </td>
              </tr>
              <tr>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>
                    <a href="#">
                        <span class="mdi-content-create" aria-hidden="true"></span>
                    </a>
                    <a href="#">
                        <span class="mdi-action-delete" aria-hidden="true"></span>
                    </a>
                  </td>
              </tr>
          </tbody>
        </table>

    </div>
  </div>

@endsection
