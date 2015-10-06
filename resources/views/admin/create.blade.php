@extends('master')
@section('title', 'Create User')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create User </h2>
            {!! Form::open(array( 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::text('name', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'ID Number')) !!}
            </div>

            <!-- retrived details -->

                <div class="row">
                    <div class="col-sm-3">
                      <b>Emp. No:</b>

                    </div>

                   <div class="col-sm-9">
                       12564398
                   </div>
               </div>

               <div class="row">
                   <div class="col-sm-3">
                      <b>Name:</b>

                   </div>

                  <div class="col-sm-9">
                      Jane Doe
                  </div>
              </div>

              <div class="row">
                  <div class="col-sm-3">
                    <b>Department:</b>

                  </div>

                 <div class="col-sm-9">
                     College of Computer Studies
                 </div>
             </div>

             <div class="row">
                 <div class="col-sm-3">
                    <b>Position:</b>
                 </div>

                <div class="col-sm-9">
                    Dean
                </div>
            </div>

            <div class="form-group">
                {!! Form::text('password', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Password')) !!}
            </div>

            <div class="form-group">
                {!! Form::text('password', null,
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

        </div>


    </div>
  </div>

@endsection
