@extends('master')
@section('title', 'Create Message')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create Message </h2>
            {!! Form::open(array( 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::text('idno', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'ID Number')) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('message', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Type message here')) !!}
            </div>

            <div class="form-group">
                {!! Form::select('messagetype',
                                  array('Urgent' => 'Urgent', 'Normal' => 'Normal'),
                                  null,
                                  ['placeholder' => 'Select Message Type',
                                  'class'=>'form-control']) !!}
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
