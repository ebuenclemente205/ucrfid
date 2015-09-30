@extends('master')
@section('title', 'Create Daily Report')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create Daily Report </h2>
            {!! Form::open(array( 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::label('Date') !!}
                {!! Form::date('date', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Date')) !!}
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
