@extends('master')
@section('title', 'Create School Year Report')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create School Year Report </h2>
            @foreach($errors->all() as $error)
                <p class="alert alert-danger"> {{ $error }}</p>
            @endforeach
            {!! Form::open(array( 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::label('Input School Year') !!}
                {!! Form::text('year', null,
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
