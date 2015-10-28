<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="LINK">
    <title>Conversation</title>
    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/assets/css/starter-template.css" rel="stylesheet">
    <link href="/assets/css/signin.css" rel="stylesheet">
    <link href="/assets/css/dashboard.css" rel="stylesheet">
    <!-- <link href="/assets/css/sticky-footer-navbar.css" rel="stylesheet"> -->
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
            <li><a href="/users/dashboard">Dashboard</a></li>
            <li><a href="/users/teams">Teams</a></li>
            <li><a href="/users/events">Events</a></li>
            <li><a href="#">Members</a></li>
            <li><a href="/messages">Messages</a></li>
            <li><a href="/users/logoff">Log Off</a></li>
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
          <li><a href="/messages/load_message/83">UTAustin Team Chat</a></li>
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
<?php
          $subject = $this->session->userdata('msg_array');
          echo "<h3>Conversation \"".$subject[0]['subject']."\" started at ".$subject[0]['cdate']
."</h3>";
?>
          
        </div>
        <div class="thread-body">
          <h4>Message thread</h4>
<?php
// This will only show incoming messages, not outgoing messages
      foreach($this->session->userdata('msg_array') as $message)
      {
        // Align left from others
        if($message['sender_id'] != $this->session->userdata('user_id'))
        {
          echo "<p class='text-left'><small>On ".$message['cdate']." ".$message['user_name']." wrote:</small></p>";
          echo "<p class='text-left'> ".$message['body']."</p>";   
        }
        else
        {
          echo "<p class='text-right'><small>On ".$message['cdate']." ".$message['user_name']." wrote:</small></p>";
          echo "<p class='text-right'> ".$message['body']."</p>";
        }
      }
?>
        </div> <!-- End div.thread-body -->
        <form action="/messages/reply_message" method="post">
            <input type='text' id='message' class='form-control' placeholder='Type your message' name='message' required>
            <input type="hidden" name="msg_id" value="<?= intval($this->session->userdata['last_message']['id'] ); ?>">
            <input type="hidden" name="thread_id" value="<?= intval($this->session->userdata['last_message']['thread_id']); ?>">
            <input type="hidden" name="priority" value="1">
            <input class="btn btn-default" type="submit" value="Send">
          </form>
      </div> <!-- End div.right column -->
    </div> <!-- End div.row -->
  </div> <!-- End div.container -->

<!--   <footer class="footer">
    <div class="container">
      <p class="text-muted">Place sticky footer content here.</p>
    </div>
  </footer> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/main.js"></script>
</body>
</html>