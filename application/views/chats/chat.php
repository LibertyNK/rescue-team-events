<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="description" content="LINK">
  <meta name="author" content="IHL">
  <title>Conversation with... </title>
  <!-- Bootstrap core CSS -->
  <link href="/assets/css/bootstrap.css" rel="stylesheet">
  <link href="/assets/css/main.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="/assets/css/starter-template.css" rel="stylesheet">
  <link href="/assets/css/dashboard.css" rel="stylesheet">
  <!-- CSS for the multiple selects  -->
  <link href="/assets/css/chosen/chosen.css" rel="stylesheet">

  <script type="text/javascript">
    var thread_id = "<?php echo $thread_id; ?>";
    var user_id = "<?php echo $user_id; ?>";
    var base_url = "<?php echo base_url(); ?>";
    var priority = 1;
    var recipients = [1,2];
  </script>

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

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <hr>
          <li class="active"><a href="/messages/new_message">New Message <span class="sr-only">(current)</span></a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <li><a href="/chats/message_thread">Message Thread</a></li>
        </ul>
        <ul class="nav nav-sidebar">
        </ul>
      </div>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
        <div class="page-header">
          <h3>Message Thread</h3>
        </div>
        <div id="thread-body"></div> 
        <div id="chat_input">
          <input type="text" id="chat_message" name="chat_message">
          <?php echo anchor('#', 'Say it', array('title' => 'Send this chat message', 'id' => 'submit_message')); ?>

        </div>
      </div> <!-- End div.right column -->
    </div> <!-- End div.row -->
  </div> <!-- End div.container -->

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="/assets/js/chat.js"></script>
  <script src="/assets/js/main.js"></script>
  
</body>
</html>