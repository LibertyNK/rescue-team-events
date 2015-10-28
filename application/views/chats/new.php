<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="description" content="LINK">
  <meta name="author" content="IHL">
  <title>Compose a New Message</title>
  <!-- Bootstrap core CSS -->
  <link href="/assets/css/bootstrap.css" rel="stylesheet">
  <link href="/assets/css/main.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="/assets/css/starter-template.css" rel="stylesheet">
  <link href="/assets/css/signin.css" rel="stylesheet">
  <link href="/assets/css/dashboard.css" rel="stylesheet">
  <!-- CSS for the multiple selects  -->
  <link href="/assets/css/chosen/chosen.css" rel="stylesheet">
</head>

<body>

  <div class= "container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>`
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

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <hr>
          <li class="active"><a href="/chats/new_message">New Message <span class="sr-only">(current)</span></a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <li><a href="/chats/message_thread">Message Thread</a></li>
        </ul>
        <ul class="nav nav-sidebar">
<?php
          foreach($this->session->userdata('recent_conversations') as $conversation)
          {
            // if($conversation['sender_id'] != $this->session->userdata('user_id'))
            // {
              echo "<li><a href='/messages/load_message/".$conversation['thread_id']."'>".$conversation['user_name']."</a></li>";
            // }
          }
?>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header">
          <h2>Start a New Conversation!</h2>
        </div>

        <div class="col-md-6">
          <form id="" action="/messages/post_message" method="post">
            <h4>Who to message?</h4>
            <select data-placeholder="Just start typing any names or teams!" style="width:300px;" class='chosen-select form-control' name='user_id[]' multiple>
              <option value=""></option>
              <optgroup label="Teams">
<?php
              foreach($this->session->userdata('teams_names') as $team)
              {
                echo "<option value='".$team['id']."'>".$team['name']."</option>";
              }
?>
              </optgroup>  
              <optgroup label="All People">
<?php
              foreach($this->session->userdata('user_names') as $user)
              {
                if($user['id'] != $this->session->userdata('user_id')){
                  echo "<option value='".$user['id']."'>".$user['first_name']." ".$user['last_name']."</option>";
                }
              }
?>
              </optgroup>
            </select>
            <h4>Subject</h4>
            <input type="text" name="subject" placeholder="Message subject">
            <h4>Message</h4>
            <textarea name="message" id="message" cols="60" rows="10"></textarea>
            <input type="hidden" name="priority" value='1'>    
            <input class="btn btn-default" type="submit" value="Send">
          </form>
        </div> <!-- End div.thread-body -->
      </div> <!-- End div.right column -->
    </div> <!-- End div.row -->
  </div> <!-- End div.container -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/assets/js/chosen.jquery.js" type="text/javascript"></script>
  <script src="/assets/js/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  <script src="/assets/js/chosen.jquery.js" type="text/javascript"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/chat.js"></script>
</body>

</html>