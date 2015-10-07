@extends('master')
@section('title', 'Create User')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create User </h2>
            {!! Form::open(array(
                          'action' => 'AdminController@create',
                          'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::text('idno', null,
                                array(
                                'class'=>'form-control',
                                'placeholder'=>'ID Number')) !!}
            </div>
            <div class="row">
              <div class="col-sm-offset-3 col-sm-6 form-group">
                  {!! Form::submit('Create',
                                    array('class'=>'btn btn-inverse create-user-btn')) !!}
              </div>
            </div>
            {!! Form::close() !!}
            <!-- retrived details -->

                <div class="row">
                      <div class="col-sm-3">
                        <b>Emp. No:</b>
                      </div>
                      <div class="col-sm-9">
                          {{ $employee->idno }}
                      </div>
                 </div>

                 <div class="row">
                     <div class="col-sm-3">
                        <b>Name:</b>
                     </div>
                     <div class="col-sm-9">
                        {{ $employee->lastName }},  {{ $employee->firstName }}
                     </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                      <b>Department:</b>
                    </div>
                    <div class="col-sm-9">
                       {{ $employee->department->colName }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                      <b>Position:</b>
                    </div>
                    <div class="col-sm-9">
                       {{ $employee->position }}
                    </div>
                </div>

              {!! Form::open(array(
                            'action' => array('AdminController@store', 'idno' => $employee->idno),
                            'class' => 'form')) !!}
                <div class="form-group">
                    {!! Form::password('password',
                                    array('required',
                                    'class'=>'form-control',
                                    'placeholder'=>'Password')) !!}
                </div>

                <div class="form-group">
                    {!! Form::password('password_confirmation',
                                    array('required',
                                    'class'=>'form-control',
                                    'placeholder'=>'Confirm Password')) !!}
                </div>

                <div class="form-group">
                     {!! Form::select('position',
                                       array('Admin' => 'Admin',
                                             'CSU' => 'CSU',
                                             'Library' => "Library",
                                             'Department Head' => 'Department Head'
                                        ),
                                       null,
                                       ['placeholder' => 'Select Permission',
                                       'class'=>'form-control',
                                       'required']) !!}
                 </div>

                 <div class="form-group">
                    {!! Form::select('status',
                                      array('1' => 'Active', '0' => 'Inactive'),
                                      null,
                                      ['placeholder' => 'Select Status',
                                      'class'=>'form-control',
                                      'required']) !!}
                 </div>

                 <div class="row">
                    <div class="col-sm-6 form-group ">
                        {!! Form::submit('Submit',
                                          array('class'=>'btn btn-inverse create-user-btn')) !!}
                    </div>

                    <div class="col-sm-6 form-group">
                        {!! Form::reset('Cancel',
                                          array('class'=>'btn btn-inverse create-user-btn')) !!}
                    </div>
                 </div>
              {!! Form::close() !!}
              @if (session('status'))
                  <div class="alert alert-danger">
                      {{ session('status') }}
                  </div>
              @endif
        </div>
    </div>
  </div>
@endsection
