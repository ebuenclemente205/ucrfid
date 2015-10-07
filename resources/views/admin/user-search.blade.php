@extends('master')
@section('title', 'Create User')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    @if(session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif


    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create User </h2>

            {!! Form::open(array('class' => 'form')) !!}
                <div class="form-group">
                    {!! Form::text('idno', null,
                                    array('required',
                                    'class'=> 'form-control',
                                    'maxlength' => '15',
                                    'placeholder'=> 'Enter ID Number')) !!}
                </div>

                <!-- retrived details -->
                <div class="row">
                  <div class="col-sm-offset-3 col-sm-6 form-group">
                      {!! Form::submit('Create', array('class'=>'btn btn-inverse create-user-btn')) !!}
                    </div>
                </div>
            {!! Form::close() !!}

        @foreach($errors->all() as $error)
            <p class="alert alert-danger"> {{ $error }}</p>
        @endforeach
        @if(isset($errormsg))
          <p class="alert alert-danger">{{ $errormsg }}</p>
        @elseif ($employee!= '')
          {!! Form::open(array(
                        'action' => 'AdminController@store',
                        'class' => 'form')) !!}
            <div class="row">
                <div class="col-sm-3">
                  <b>Emp. No:</b>
                </div>
                <div class="col-sm-9">
                    {!! $employee->idno !!}
                </div>
           </div>

           <div class="row">
               <div class="col-sm-3">
                  <b>Name:</b>
               </div>
               <div class="col-sm-9">
                  {!! $employee->lastName !!},  {!! $employee->firstName !!}
               </div>
          </div>

          <div class="row">
              <div class="col-sm-3">
                <b>Department:</b>
              </div>
              <div class="col-sm-9">
                 {!! $employee->department->colName !!}
              </div>
         </div>

         <div class="row">
             <div class="col-sm-3">
                <b>Position:</b>
             </div>

            <div class="col-sm-9">
                {!! $employee->position !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::password('password',
                            array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Password')) !!}
        </div>

        <div class="form-group">
            {!! Form::password('repassword',
                            array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Confirm Password')) !!}
        </div>

        <div class="form-group">
            {!! Form::select('status',
                              array('Active' => 'Active', 'Inactive' => 'Inactive'),
                              null,
                              ['placeholder' => 'Select Status',
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
        @endif

    </div>
  </div>

@endsection
