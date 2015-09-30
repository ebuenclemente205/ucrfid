@extends('master')
@section('title', 'Create Semestral Report')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create Semestral Report </h2>
            {!! Form::open(array( 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::select('semester',
                                  array('1' => '1st Semester', '2' => '2nd Semester', '4' => 'Summer'),
                                  null,
                                  ['placeholder' => 'Select Semester',
                                  'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Select School Year') !!}
                {!! Form::date('year', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Select School Year')) !!}
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
