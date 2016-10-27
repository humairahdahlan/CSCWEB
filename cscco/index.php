<?php include '../core/init.php';

include '../components/CSCcordinator_head.php'; ?>

</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#"><img src="csclogo.png" style="width:170px; height:50px;" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="height:50px;"><span class="glyphicon glyphicon-home"></span> HOME</a>
        <li><a href="#" style="height:50px;"><span class="glyphicon glyphicon-globe"></span> NOTIFICATIONS</a></li>
        <li><a href="#" style="height:50px;"><span class="glyphicon glyphicon-envelope"></span> MESSAGES</a></li>
        <li><a class="navbar-brand navbar-right" href="#" style="height:40px;"> (LOGOUT)</a></li>
      </ul>
    </div>
  </div>
</nav>
    
   </br> 
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">REPORTS<span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="#">Attendence</a></li>
                <li role="separator" class="divider"></li>
                <li><a tabindex="-1" href="#">Income</a></li>
                <li role="separator" class="divider"></li>
                <li><a tabindex="-1" href="#">Marks</a></li>
                <li role="separator" class="divider"></li>
                <li><a tabindex="-1" href="#">Expences</a></li>
                <li role="separator" class="divider"></li>
                <li><a tabindex="-1" href="#">Handle Report</a></li>
                <li role="separator" class="divider"></li>
            </ul>
        </li>
              
              <li class="dropdown">
            <a href="handlelecturer.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">HANDLE LECTURER <span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="handlelecturer.html">Handle Lecturer</a></li>
                </ul>
                </li>
                  
                  
                <li class="dropdown">
            <a href="handlecourses.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">HANDLE COURSES<span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="handlecourses.html">Handle Courses</a></li>
                </ul>
                </li>
                    
                    
                    
            
                    
                    
                    <li class="dropdown">
            <a href="handlelectures.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">HANDLE LECTURES <span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="handlelectures.html">Handle Lectures</a></li>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">SEND<span class="caret">
            </a>
            <ul class="dropdown-menu multi-level dropdown-color" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="email.html">Email</a></li>
                <li role="separator" class="divider"></li>
                <li><a tabindex="-1" href="notification.html">Notification</a></li>
                <li role="separator" class="divider"></li>
            </ul>
                </li>
      </ul>
    </div>
  </div>
</nav>
</br>
    
    <!-- other information leftbar panel><!-->
<div class="sidenav col-md-2 col-sm-3 col-xs-12">
    <div class="well">
        <p><a href="#" style="color:black;"><strong>Upcoming Events</strong></a></p>
    </div>
</div>
    
    
<!-- start of News feed><!-->
<div class="col-md-6 col-sm-12 col-xs-12">
    <div id="newsfeed">
        <div class="col-sm-12 col-xm-12"> <center><h3>News Feed</h3></center></div>

        <?php

        $posts = getposts();
        while ($row = mysqli_fetch_assoc($posts)) {
            $id = $row['adminid'];
            $admindata = getadmin($id);
            while ($data = mysqli_fetch_assoc($admindata)) {
                ?>

                <div class="col-sm-12 col-xm-12" >
                    <div id="nws">
                        <div class="panel panel-default">
                            <div class="panel-heading" ><strong><?php echo $row['subject']; ?></strong> <br>
                                <small>Posted by <?php echo $data['name']; ?></small>
                                <div style="width: 10%; margin-left: 85%;margin-top: -5%;height: 70px;"><img src="<?php echo $data['profile']; ?>" alt="" style="width: 100%; height: 100%;"></div>

                            </div>
                            <div class="panel-body" id="newsbody">
                                <?php echo $row['text']; ?>
                                <div id="attach"><a href=""><?php echo $row['date']; ?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

            }

        } ?>
    </div>
</div>

<br>

<!-- profile picture image><!-->
<div class="sidenav col-md-2  col-sm-3 col-xs-12">
    <div class="panel panel-default" id="profpic-panel">
        <div class="panel-heading" style="background-color:black;"><strong>Logged in User</strong></div>
        <div class="panel-body" style="background-color:dimgray;">
            <div class="thumbnail"><img src="profilepic.png" class="img-circle" height="65" width="65" alt="Avatar"></div>
            
            <div id="profpic-well">
                <strong>CSC Coordinator</strong></br>
                Country :</br>
                Name :
            </div>
        </div>
    </div>
    <div class="well">
        <p><a href="#" style="color:black;">Calendar</a></p>
    </div>



</div>
</div>
</div>

</div>
</div>

<?php include "../components/cscordinator_footer.php"; ?>
