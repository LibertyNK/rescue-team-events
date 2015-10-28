<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liberty in North Korea</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             <a class="navbar-brand" href="/"><img  id ="logo" src = "/assets/img/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href>Hello, <?= $this->session->userdata('first_name') ?></a></li>
            <li><a href="/views/dashboard">Dashboard</a></li>
            <li><a href="/views/teams">Teams</a></li>
            <li><a href="/views/events">Events</a></li>
            <li><a href="/views/dashboard">Members</a></li>
            <li><a href="/views/messages">Messages</a></li>
            <li><a href="/views/logoff">Log Off</a></li>
          </ul>
        </div>
      </div>
    </nav>  
  <div class= "container" id = "wrapper">
    <div class= "container text-center">
    <!--   <h1><?= $user['first_name'].' '.$user['last_name'] ?></h1> -->
    </div>
    <div class="row profile">

    <div class="col-md-3">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
          <img src="/assets/img/faces/JiYoung1.png" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
          <!--  <?= $user['first_name'].' '.$user['last_name'] ?> -->
          </div>
          <div class="profile-usertitle-job">
            Team Member
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
          <button type="button" class="btn btn-success btn-sm">Message</button>
        </div>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
          <ul class="nav">
            <li class="active">
              <a href="#">
              <i class="glyphicon glyphicon-home"></i>
              Home Team </a>
            </li>
            <li>
              <a href="#" target="_blank">
              <i class="glyphicon glyphicon-envelope"></i>
             <!--  <?= $user['email']?> </a> -->
            </li>
            <li>
              <a href="#" target="_blank">
              <i class="glyphicon glyphicon-earphone"></i>
              <?= $user['phone']?></a>
            </li>
          </ul>
        </div>
        <!-- END MENU -->
      </div>
    </div>
    <div class="col-md-9">
        <div class="profile-content">            
             <p><?= $user['story']?></p>
             <hr>
             <p>Home Team: Palo Alto Highschool</p>
             <p>Location: Palo Alto</p>
             <!-- <p>Joined Date: <?= date('M d Y', strtotime($user['created_at']))?></p> -->
             <p>Role in Team: Vice President</p>
             <hr>
             <h2>Events I participated</h2>
              <div class="col-md-4">
                <img class = "event_image" src = "/assets/img/banner/pp_movement_nomads.png">
              </div>
              <div class="col-md-4">
                <img class = "event_image" src = "/assets/img/banner/pp_movement_summit_3.png">  
             </div>
              <div class="col-md-4">
                <img class = "event_image" src = "/assets/img/banner/homepage_ctn_new.jpg"> 
              </div>
        </div>
        
      
    </div>

  </div>


   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>