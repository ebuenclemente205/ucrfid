<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::to('home')}}">University of Cebu</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">

        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{ URL::to('home')}}">Home</a></li>
            <li class="dropdown ">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('admin/users/create')}}">Create Account</a></li>
                    <li><a href="{{ URL::to('admin/users')}}">Users List</a></li>
                </ul>
            </li>
            <li class="dropdown ">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('sharedLayouts/messageCreate')}}">Create Message</a></li>
                    <li><a href="{{ URL::to('sharedLayouts/messagesCurrent')}}">Current Messages</a></li>
                    <li><a href="{{ URL::to('sharedLayouts/messagesDone')}}">Done Messages</a></li>
                </ul>
            </li>
            <li class="dropdown ">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('reports/daily')}}">Daily</a></li>
                    <li><a href="{{ URL::to('reports/weekly')}}">Weekly</a></li>
                    <li><a href="{{ URL::to('reports/monthly')}}">Monthly</a></li>
                    <li><a href="{{ URL::to('reports/semestral')}}">Semester</a></li>
                    <li><a href="{{ URL::to('reports/yearly')}}">School Year</a></li>
                </ul>
            </li>
            <li class=""><a href="{{ URL::to('reports/reportCSU')}}">Reports</a></li>
            <li class=""><a href="{{ URL::to('sharedLayouts/search')}}">Search</a></li>
            <li><a href="{{ url('auth/logout') }}">Logout</a></li>
        </ul>
    </div>
</div>
