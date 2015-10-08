@extends('master')
@section('title', 'Create Monthly Report')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create Monthly Report </h2>
            @foreach($errors->all() as $error)
                <p class="alert alert-danger"> {{ $error }}</p>
            @endforeach
            {!! Form::open(array( 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::select('month',
                                  array('01' => 'January',
                                        '02' => 'February',
                                        '03' => 'March',
                                        '04' => 'April',
                                        '05' => 'May',
                                        '06' => 'June',
                                        '07' => 'July',
                                        '08' => 'August',
                                        '09' => 'September',
                                        '10' => 'October',
                                        '11' => 'November',
                                        '12' => 'December'),
                                  null,
                                  ['placeholder' => 'Select Month',
                                  'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Input School Year') !!}
                {!! Form::text('year', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Input Year')) !!}
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
