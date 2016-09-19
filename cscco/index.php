<?php include '../components/cscordinator_head.php'; ?>

</head>
<body style="background-color:white">

<!-- page header ><!-->
<nav class="navbar navbar-custom" role = "navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button style="background-color:burlywood;" type="button" class="navbar-toggle collapsed" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#"><img src="../public/dist/img/system/csclogo.png" style="width:170px; height:50px;" ></a>


        </div>
        <div class="collapse navbar-collapse" id="navbar_collapse" >
            <ul class="nav navbar-nav" id="navbar-1" style="margin-left: 1100px;">
                <li><a href="#" style="height:50px;"><span class="glyphicon glyphicon-home"></span> Home</a>
                <li><a href="#" style="height:50px"><span class="glyphicon glyphicon-globe"></span> Notifications</a></li>
                <li><a href="#" style="height:50px;"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
            </ul>
            <div>
                <a class="navbar-brand navbar-right" href="#" id="log-out"><span class="glyphicon glyphicon-log-out"></span> Log-out</a>
            </div>
        </div>
    </div>


    </div>
</nav>
<nav class="navbar navbar-custom" role = "navigation>
    <div class="container-fluid">
<div class="navbar-header">
    <button style="background-color:white;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

</div>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:#66B9BF;">
    <ul class="nav navbar-nav" id="navbar-2" style="margin-left: 890px">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports<span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu" style="padding: 0;">
                <li><a tabindex="-1" href="#">Attendence</a></li>
                <li><a tabindex="-1" href="#">Income</a></li>
                <li><a tabindex="-1" href="#">Marks</a></li>
                <li><a tabindex="-1" href="#">Expences</a></li>

            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Handle Lecturer<span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="handlelecturer.html">Handle Lecturer</a></li>
                </li>



            </ul>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Handle Courses<span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="handlecourses.html">Handle Courses</a></li>
                </li>

            </ul>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Handle Data<span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="#">Report Data</a></li>
                <li><a tabindex="-1" href="#">Lecture Allocation</a></li>
                <li><a tabindex="-1" href="#">Others</a></li>


            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Handle Lectures<span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="handlelectures.html">Handle Lectures</a></li>
                </li>
            </ul>

        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Send<span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="#">Email</a></li>
                <li><a tabindex="-1" href="notifications.html">Notification</a></li>
                <li><a tabindex="-1" href="messages.html">Message</a></li>


            </ul>
        </li>


</div>
</div>
</div>

</div></div></nav>
<br>

<!-- other information leftbar panel><!-->
<div class="sidenav col-md-2 col-sm-3 col-xs-12">
    <div class="well">
        <p><a href="#" style="color:brown;"><strong>Upcoming Events</strong></a></p>

    </div>


</div>





<!-- start of News feed><!-->
<div class="col-md-8 col-sm-6 col-xs-12">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading"  style="background-color:#66B9BF;" id="newsfeed"><strong>News Feed</strong></div>
            <div class="panel-body" id="newsfeed-panelbody" style="background-color:white;"></div>
        </div>
    </div>
</div>



<br>


<!-- profile picture image><!-->
<div class="sidenav col-md-2  col-sm-3 col-xs-12">
    <div class="panel panel-default" id="profpic-panel">
        <div class="panel-heading" style="background-color:#66B9BF;"><strong>Logged in User</strong></div>
        <div class="panel-body" style="background-color:white;">
            <div class="thumbnail"></div>
            <div id="profpic-well">

                <strong>CSC Coordinator</strong></br>
                Country :</br>
                Name :
            </div>
        </div>
    </div>


    <div class="well">
        <p><a href="#" style="color:brown;">Calendar</a></p>
    </div>




</div>
</div>
</div>



<?php include "../components/cscordinator_footer.php"; ?>
