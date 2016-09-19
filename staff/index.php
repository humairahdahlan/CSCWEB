<?php
 include '../components/page_head.php'; ?>

<link rel="stylesheet" href="../public/dist/css/staff_css.css">

</head>


    <body background="">
    <!-- header-->
    <nav class="navbar navbar-default" id="myNavbar">
        <div class="container-fluid" >
            <div class="navbar-header" style="margin: 17px;" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="../public/dist/img/system/csclogo.png"class="img-responsive csc-logo" id="logo" >


            </div>
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right" id="navbar_txt" style="margin: 12px;">
                    <li><a href="index.php" style="color:white;" >Home</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;"><span>Notifications</span>
                            <span class="caret">
						</span>
                        </a>
                        <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu" id="tasks_dropdown">
                            <li><a tabindex="-1" href="inbox_Email.html" id="task_txt">Emails</a></li>

                        </ul>
                    </li>

                    <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-inverse" id="myNavbar">
        <div class="container-fluid" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>



            </div>
            <div class="collapse navbar-collapse" style="background-color: rgb(102, 185, 191)">

                <ul class="nav navbar-nav navbar-right" id="navbar_txt">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="color:white;font-size:17px;" >Edit Reports
                            <span class="caret">
						</span>
                        </a>
                        <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu" id="tasks_dropdown">
                            <li><a tabindex="-1" href="select_course.php" id="task_txt">Attendence</a></li>
                            <li><a tabindex="-1" href="income_report.html" id="task_txt">Income</a></li>
                            <li><a tabindex="-1" href="expense_report.html" id="task_txt">Expences</a></li>
                            <li><a tabindex="-1" href="select_course_marks.html" id="task_txt">Student Marks</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="report_generating.html"  style="color:white;font-size:17px;">Generate Report
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="color:white;font-size:17px;">Send
                            <span class="caret">
						</span>
                        </a>
                        <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu" id="tasks_dropdown">
                            <li><a tabindex="-1" href="inbox_Email.html" id="task_txt" >Email</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="student_registration.html"   style="color:white;font-size:17px;">Register Students
                        </a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
    <!-- end of header-->
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-8 text-left">
                <div class="well" id="news">
                    <p>News feed:</p>
                    <div class="thumbnail">
                        <p style="text-align:left;"><strong>Subject:******</strong></p>
                        <p style="text-align:left;">Date --:--:----  / time --:--:--</p>
                        <p style="text-align:left;">Description:*************</p>
                        <button class="btn btn-primary">See More</button>
                    </div>

                    <div class="thumbnail">
                        <p style="text-align:left;"><strong>Subject:******</strong></p>
                        <p style="text-align:left;">Date --:--:----  / time --:--:--</p>
                        <p style="text-align:left;">Description:*************</p>
                        <button class="btn btn-primary">See More</button>
                    </div>

                    <div class="thumbnail">
                        <p style="text-align:left;"><strong>Subject:******</strong></p>
                        <p style="text-align:left;">Date --:--:----  / time --:--:--</p>
                        <p style="text-align:left;">Description:*************</p>
                        <button class="btn btn-primary">See More</button>
                    </div>
                </div>

            </div>

            <div class="col-sm-2 sidenav">
                <!--profile-->
                <div class="well" style="height:200px;" id="proArea">
                    <h4>Full Name</h4>
                    <img src="images/propic.png" class="img-circle" height="100" width="100" alt="Avatar">
                </div>
                <!--end profile-->

            </div>
            <div class="col-sm-2 sidenav">
                <div class="well" style="height:200px;" id="calendar">
                    <p><strong>calender</strong></p>
                </div>
            </div>
        </div>

<?php include "../components/page_tail.php";
