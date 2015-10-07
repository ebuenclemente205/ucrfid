@extends('master')
@section('title', 'Done Messages')

@section('content')

  <div class="container col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Done Messages </h2>
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
              </tr>
              <tr>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr>
          </tbody>
        </table>

    </div>
  </div>

@endsection
