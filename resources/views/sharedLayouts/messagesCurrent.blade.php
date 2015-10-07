@extends('master')
@section('title', 'Current Messages')

@section('content')

  <div class="container col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Current Messages </h2>
        </div>

        <table class="table table-striped">
          <thead>
              <tr>
                  <th>Sender</th>
                  <th>Recipient-Id No</th>
                  <th>Recipient-Name</th>
                  <th>Course and Year</th>
                  <th>Date</th>
                  <th>Message</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>
                      <a href="#">
                          <span class="mdi-action-view-headline" aria-hidden="true"></span>
                      </a>
                      <a href="#">
                          <span class="mdi-action-done" aria-hidden="true"></span>
                      </a>
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
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>
                    <a href="#">
                        <span class="mdi-action-view-headline" aria-hidden="true"></span>
                    </a>
                    <a href="#">
                        <span class="mdi-action-done" aria-hidden="true"></span>
                    </a>
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
