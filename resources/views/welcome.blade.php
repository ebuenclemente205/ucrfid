<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/roboto.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/material.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/ripples.min.css') !!}" >
    <!-- <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-light_blue.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->



</head>
<body>

  <div class="navbar navbar-inverse">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="javascript:void(0)">University of Cebu</a>
      </div>
      <div class="navbar-collapse collapse navbar-inverse-collapse">

          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="javascript:void(0)">Home</a></li>
              <li class="dropdown">
                  <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="javascript:void(0)">Create Account</a></li>
                      <li><a href="javascript:void(0)">Users List</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="javascript:void(0)">Create Message</a></li>
                      <li><a href="javascript:void(0)">Current Messages</a></li>
                      <li><a href="javascript:void(0)">Done Messages</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="javascript:void(0)">Daily</a></li>
                      <li><a href="javascript:void(0)">Weekly</a></li>
                      <li><a href="javascript:void(0)">Monthly</a></li>
                      <li><a href="javascript:void(0)">Semester</a></li>
                      <li><a href="javascript:void(0)">School Year</a></li>
                  </ul>
              </li>
              <li><a href="javascript:void(0)">Reports</a></li>
              <li><a href="javascript:void(0)">Search</a></li>
              <li><a href="javascript:void(0)">Logout</a></li>
          </ul>
      </div>
  </div>
  <div class="container col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Home </h2>
        </div>

        <table class="table table-striped">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Column heading</th>
                  <th>Column heading</th>
                  <th>Column heading</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr>
              <tr >
                  <td>3</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr>
              <tr >
                  <td>4</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr>
              <tr >
                  <td>5</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
              </tr>
          </tbody>
        </table>

    </div>
  </div>
 <!-- Uses a header that contracts as the page scrolls down. -->

<!-- <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--waterfall">
    Top row, always visible
    <div class="mdl-layout__header-row">
      Title
      <span class="mdl-layout-title">Title</span>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="waterfall-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="waterfall-exp" />
        </div>
      </div>
    </div>
    Bottom row, not visible on scroll
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      Navigation
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
      Simple Textfield
      <form action="#">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="sample1" />
          <label class="mdl-textfield__label" for="sample1">Text...</label>
        </div>
      </form>
    </div>
  </main>
</div> -->



  <!-- <script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script> -->
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
