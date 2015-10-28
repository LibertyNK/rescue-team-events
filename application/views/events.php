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
  <div class= "container">
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
            <li><a href="/views/create_event" id="new_event" >Create Event</a></li>
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
  </div>
  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron event_banner">
      <div class="container" id ="wrapper">
        <h1>Events page</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>UCLA Conference</h2>
          <img class = "event_image" src = "/assets/img/banner/pp_movement_nomads.png">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>LINK at TED</h2>
          <img class = "event_image" src = "/assets/img/banner/pp_movement_summit_3.png">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>March for North Korea</h2>
          <img class = "event_image" src = "/assets/img/banner/homepage_ctn_new.jpg">
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
      
    </div>
    <div class="jumbotron red_bg">
        <h2 class="text-center">UPCOMING EVENTS</h2>
        <div class="row">
          <div class="col-md-12">
          <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Location</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
<?php
              foreach($events as $event)
              {
                echo "<tr>";
                echo "<td>{$event['name']}</td>";
                echo "<td>{$event['description']}</td>";
                echo "<td>{$event['location']}</td>";
                echo "<td>".date('M d Y',strtotime($event['date_of_event']))."</td>";
                echo "<tr>";
              }

?>            
          </tbody>

          </table>
          </div>
        </div>
    </div>
    

   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/main.js"></script>
  </body>
</html>