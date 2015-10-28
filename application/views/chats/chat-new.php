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
  <!-- Materialize CSS -->
  <link href="/assets/css/materialize.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="/assets/css/chat-style.css" rel="stylesheet">
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

  <header>
    <nav class="red darken-1">
      <div class="nav-wrapper">
        <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href>Hello, <?= $this->session->userdata('first_name') ?></a></li>
          <li><a href="/views/dashboard">Dashboard</a></li>
          <li><a href="/views/teams">Teams</a></li>
          <li><a href="/views/events">Events</a></li>
          <li><a href="/views/dashboard">Members</a></li>
          <li><a href="/views/messages">Messages<span class="new badge">4</span></a></li>
          <li><a href="/views/logoff">Log Off</a></li>
        </ul>
        <ul id="mobile-demo" class="side-nav">
          <li><a href>Hello, <?= $this->session->userdata('first_name') ?></a></li>
          <li><a href="/views/dashboard">Dashboard</a></li>
          <li><a href="/views/teams">Teams</a></li>
          <li><a href="/views/events">Events</a></li>
          <li><a href="/views/dashboard">Members</a></li>
          <li><a href="/views/messages">Messages<span class="new badge">4</span></a></li>
          <li><a href="/views/logoff">Log Off</a></li>
        </ul>
      </div>
    </nav>

    <ul id="slide-out" class="side-nav fixed collection">
      <li class="logo">
        <a id="logo-container" href="#" class="brand-logo">
          <img id="logo" src="/assets/img/logo.png" alt="LINK logo"></img>
        </a>
      </li>
      <nav class="white black-text">
        New message button
      </nav>
      <nav class="white black-text">
        Search - miniature
      </nav>

      <li class="collection-item avatar indigo lighten-5">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C <span class="badge right">4</span></span>
        <p class="truncate">Ninja attackffdasdfasdfasdf! </p>
      </li>
      <li class="collection-item avatar indigo lighten-5">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C <span class="badge right">1</span></span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar blue-grey lighten-4">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar blue-grey lighten-4">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>
      <li class="collection-item avatar">
        <img src="/assets/img/michael.png" alt="" class="circle">
        <span class="title">Michael C</span>
        <p>Ninja attack!</p>
      </li>

    </ul>  

  </header>

  <main>
    <div class="row">
      <header id="message-info">
        <nav class="deep-orange lighten-5">
          <div class="row">
            <!-- <span class="flow-text">Thread subject Message</span> -->
            <div class="chip">
              <img src="/assets/img/michael.png" alt="Contact Person">Jane Doe
            </div>
            <div class="chip">
              <img src="/assets/img/michael.png" alt="Contact Person">Jane Doe
            </div>
          </div>
        </nav>
      </header>
    </div>
    
    <div id="chat-window" class="container">

      <!-- Main chat body -->
      <div id="main" class="section scrollspy">

        <div id="thread-body"></div> 

        <!-- Message in template -->
        <div class="msg-group row">
          <!-- <div class="msg msg-in left"> -->
            <div class="msg msg-body-left z-depth-2 left">
              <h6>John said @ 1:30pm: </h6>
              <span class="msg-text">This is an in message</span>
            </div>
          <!-- </div> -->
        </div>
        <!-- Message out template -->
        <div class="msg-group row">
          <div class="msg msg-body-right z-depth-2 right">
            <h6>You said @ 1:30pm: </h6>
            <span class="msg-text">This is an out message</span>
          </div>
        </div>
        <div class="msg-group row">
          <div class="msg msg-body-right z-depth-2 right">
            <h6>You said @ 1:30pm: </h6>
            <span class="msg-text">This is an out message</span>
          </div>
        </div>
        
        <div id="chat_input">
          <input type="text" id="chat_message" name="chat_message">
          <?php echo anchor('#', 'Say it', array('title' => 'Send this chat message', 'id' => 'submit_message')); ?>
        </div> 
      </div> <!-- End div#main -->
    </div> <!-- End div.container -->
  </main>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/chat.js"></script>
  <script src="/assets/js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.button-collapse').sideNav({
        menuWidth: 240, // Default is 240
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
      });
    });
  </script>
  
</body>
</html>