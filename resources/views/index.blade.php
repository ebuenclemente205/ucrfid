<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/roboto.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/material.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/ripples.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/adminStyles.css') !!}" >

</head>
<body class="index-login-bg">
      <div class="col-md-4 col-md-offset-4">
        <img src="{!! asset('images/uc_logo.png') !!}" class="index-img-responive"/>
          <div class="panel panel-default index-panel">
            <div class="panel-heading index-form">
                {!! Form::open(array( 'class' => 'form')) !!}

                <div class="form-group">
                    {!! Form::text('idno', null,
                                    array('required',
                                    'class'=>'form-control',
                                    'placeholder'=>'ID number')) !!}
                </div>

                <div class="form-group">
                    {!! Form::text('password', null,
                                    array('required',
                                    'class'=>'form-control',
                                    'placeholder'=>'Password')) !!}
                </div>


                <div class="row">
                  <div class="col-sm-6 form-group ">
                      {!! Form::submit('Submit',
                                        array('class'=>'btn btn-inverse index-submit-btn')) !!}
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
    </div>

    <script src="{!! asset('js/jquery-1.11.3.js') !!}"></script>
    <script src="{!! asset('js/material.min.js') !!}"></script>
  	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
  	<script src="{!! asset('js/ripples.min.js') !!}"></script>

  	<script>
  	    $(document).ready(function() {
  	        // This command is used to initialize some elements and make them work properly
  	        $.material.init();
  	    });
  	</script>
</body>
</html>
