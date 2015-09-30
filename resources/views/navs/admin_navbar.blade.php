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
            <li class="active"><a href="{{ URL::to('home')}}">Home</a></li>
            <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('adminLayouts/admin_createUser')}}">Create Account</a></li>
                    <li><a href="{{ URL::to('adminLayouts/admin_usersList')}}">Users List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('sharedLayouts/messageCreate')}}">Create Message</a></li>
                    <li><a href="{{ URL::to('sharedLayouts/messagesCurrent')}}">Current Messages</a></li>
                    <li><a href="{{ URL::to('sharedLayouts/messagesDone')}}">Done Messages</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('reports/reportLibDaily_Form')}}">Daily</a></li>
                    <li><a href="{{ URL::to('reports/reportLibWeekly_Form')}}">Weekly</a></li>
                    <li><a href="{{ URL::to('reports/reportLibMonthly_Form')}}">Monthly</a></li>
                    <li><a href="{{ URL::to('reports/reportLibSemestral_Form')}}">Semester</a></li>
                    <li><a href="{{ URL::to('reports/reportLibSchoolYear_Form')}}">School Year</a></li>
                </ul>
            </li>
            <li><a href="{{ URL::to('reports/reportCSU')}}">Reports</a></li>
            <li><a href="{{ URL::to('sharedLayouts/search')}}">Search</a></li>
            <li><a href="javascript:void(0)">Logout</a></li>
        </ul>
    </div>
</div>
