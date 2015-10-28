<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liberty in Notth Korea</title>
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
  <div class= "container" id="wrapper">
    <div class="panel-body sign_up">
    <h2> Create a new Event</h2>
    <hr>
      <div class="row">
        <div class="col-lg-8">
          <form id="login-form" action="/events/add" method="post" role="form" style="display: block;">
            <div class="form-group">
              <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Event Name" value="">
            </div>
            <div class="form-group">
              <input type="text" name="location" tabindex="1" class="form-control" placeholder="Location" value="">
            </div>
            <div class="form-group">
              <input type="text" name="description" tabindex="1" class="form-control" placeholder="Description" value="">
            </div>
            <div class="form-group">
              <input type="text" name="coordinates" tabindex="1" class="form-control" placeholder="Coordinates" value="">
            </div>
            <div class="form-group">
              <input type="date" name="date_of_event" tabindex="1" class="form-control" placeholder="Coordinates" value="">
            </div>             
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <input type="submit" name="request" id="request" tabindex="4" class="form-control btn btn-login" value="Create Event">
                </div>
              </div>
            </div>                 
          </form>
        </div>
      </div>
    </div>
  </div>