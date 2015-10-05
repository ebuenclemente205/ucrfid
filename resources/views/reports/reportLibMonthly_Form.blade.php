@extends('master')
@section('title', 'Create Monthly Report')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create Monthly Report </h2>
            {!! Form::open(array( 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::select('month',
                                  array('1' => 'January',
                                        '2' => 'February',
                                        '3' => 'March',
                                        '4' => 'April',
                                        '5' => 'May',
                                        '6' => 'June',
                                        '7' => 'July',
                                        '8' => 'August',
                                        '9' => 'September',
                                        '10' => 'October',
                                        '11' => 'November',
                                        '12' => 'December'),
                                  null,
                                  ['placeholder' => 'Select Month',
                                  'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Input School Year') !!}
                {!! Form::text('sy', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'School Year ex. 2015-2016')) !!}
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

        </div>


    </div>
  </div>

@endsection
