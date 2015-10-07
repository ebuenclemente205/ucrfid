@extends('master')
@section('title', 'Create User')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        @if(session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        <h2>  Update User </h2>
          {!! Form::open(array(
                        'class' => 'form')) !!}
            <div class="row">
                <div class="col-sm-3">
                  <b>Emp. No:</b>
                </div>
                <div class="col-sm-9">
                    {!! $user->username !!}
                </div>
           </div>

           <div class="row">
               <div class="col-sm-3">
                  <b>Name:</b>
               </div>
               <div class="col-sm-9">
                  {!! $user->fullName !!}
               </div>
          </div>

          <div class="row">
              <div class="col-sm-3">
                <b>Department:</b>
              </div>
              <div class="col-sm-9">
                 {!! $user->department->colName !!}
              </div>
         </div>

         <div class="row">
             <div class="col-sm-3">
                <b>Position:</b>
             </div>

            <div class="col-sm-9">
                {!! $user->position !!}
            </div>
        </div>

        <div class="form-group">
          {!! Form::text('username', $user->username,
                          array('class'=>'form-control',
                          'placeholder'=>'Username')) !!}
        </div>

        <div class="form-group">
            {!! Form::password('password',
                            array('class'=>'form-control',
                            'placeholder'=>'Password')) !!}
        </div>

        <div class="form-group">
            {!! Form::password('password_confirmation',
                            array('class'=>'form-control',
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
                               'class'=>'form-control']) !!}
         </div>

        <div class="form-group">
            {!! Form::select('status',
                              array('1' => 'Active', '0' => 'Inactive'),
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
        @foreach($errors->all() as $error)
            <p class="alert alert-danger"> {{ $error }}</p>
        @endforeach
      </div>
    </div>
  </div>

@endsection
