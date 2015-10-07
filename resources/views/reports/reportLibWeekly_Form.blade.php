@extends('master')
@section('title', 'Create Weekly Report')

@section('content')

  <div class="container col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Create Weekly Report </h2>
            {!! Form::open(array( 'class' => 'form')) !!}
            <h4>Start Date</h4>
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
                {!! Form::label('Input Day') !!}
                {!! Form::text('day', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Day')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Input Year') !!}
                {!! Form::text('year', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Year')) !!}
            </div>

            <h4>End Date</h4>
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
                {!! Form::label('Input Day') !!}
                {!! Form::text('day', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Day')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Input Year') !!}
                {!! Form::text('year', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Year')) !!}
            </div>

            <!-- <div class="form-group">
                  {!! Form::label('Start Date') !!}
                  <div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy-MM-dd" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd" >
                      {!! Form::text('startdate', null,
                                     array('required',
                                     'readonly',
                                    'class'=>'form-control select-date',
                                    'placeholder'=>'Select start date')) !!}

                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	                </div>
							<input required type="hidden" id="dtp_input1" value="" /><br/>
			      </div>

            <div class="form-group">
                  {!! Form::label('End Date') !!}
                  <div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy-MM-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" >
                      {!! Form::text('enddate', null,
                                     array('required',
                                     'readonly',
                                    'class'=>'form-control select-date',
                                    'placeholder'=>'Select end date')) !!}

                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	                </div>

							<input required type="hidden" id="dtp_input2" value="" /><br/>
			      </div> -->

            <!-- <div class="form-group">
                {!! Form::label('Select Start Date') !!}
                {!! Form::date('startdate', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Select Start Date')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Select End Date') !!}
                {!! Form::date('enddate', null,
                                array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Select End Date')) !!}
            </div> -->


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
