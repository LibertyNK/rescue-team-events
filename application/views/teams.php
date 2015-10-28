<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liberty in North Korea</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
     <link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v3/themes/css/cartodb.css" />
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
<!--     <div class="jumbotron team_banner">
      <div class="container" id ="wrapper">
        <h1 class="white_text">Teams page</h1>
      </div>
    </div> -->
    <div id="map"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">       
          <img class = "event_image" src = "/assets/img/banner/pp_movement_nomads.png">
          <h3> Our Latest Team: <?= $latest_team['name']?> </h3>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img class = "event_image" src = "/assets/img/banner/pp_movement_summit_3.png">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <img class = "event_image" src = "/assets/img/banner/homepage_ctn_new.jpg">
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
    </div>
    <hr>
     <div class="container">
        <h2 class="text-center">OUR NEWEST TEAMS</h2>
        <div class="row">
          <div class="col-md-12">
          <table class="table table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Location</th>
              <th>Created At</th>
            </tr>
          </thead>
          <tbody>
<?php
              foreach($newest_teams as $team)
              {
                echo "<tr>";
                echo "<td>{$team['name']}</td>";
                echo "<td>{$team['location']}</td>";
                echo "<td>{$team['created_at']}</td>";
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
  <script src="/assets/js/bootstrap.min.js"></script>
  <!-- CartoDB Map Script -->
  <script src="http://libs.cartocdn.com/cartodb.js/v3/cartodb.js"></script>
  <script src="/assets/js/map.js"></script>
  </body>
</html>