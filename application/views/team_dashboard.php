<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liberty in North Korea</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/dashboard.css" rel="stylesheet">
    <link href="/assets/css/chosen/chosen.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container1',
                    type: 'line',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Donations',
                    x: -20 //center
                },
                subtitle: {
                    text: '',
                    x: -20
                },

                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Donations($)'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                
                series: []
            }
            
            $.getJSON("/stats/show/", function(json) {
                options.xAxis.categories = json[0]['data'];
                options.series[0] = json[1];
                chart = new Highcharts.Chart(options);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container2',
                    type: 'pie',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Donations',
                    x: -20 //center
                },
                subtitle: {
                    text: '',
                    x: -20
                },

                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Donations($)'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                
                series: []
            }
            
            $.getJSON("/stats/show/", function(json) {
                options.xAxis.categories = json[0]['data'];
                options.series[0] = json[1];
                chart = new Highcharts.Chart(options);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container3',
                    type: 'bar',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Donations',
                    x: -20 //center
                },
                subtitle: {
                    text: '',
                    x: -20
                },

                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Donations($)'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                
                series: []
            }
            
            $.getJSON("/stats/show_events/", function(json) {
                options.xAxis.categories = json[0]['data'];
                options.series[0] = json[1];
                chart = new Highcharts.Chart(options);
            });
        });
    </script>

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
          <?php $user = $this->session->userdata('email'); ?>
            <li><a href>Hello, <?= $this->session->userdata('first_name') ?></a></li>
            <?php
            if($this->session->userdata('user_level') == 1)
            {
                echo "<li><a href='/views/dashboard'>Dashboard</a></li>";
            }
            ?>
            <li><a href="/views/teams">Teams</a></li>
            <li><a href="/views/events">Events</a></li>
            <li><a href="/views/dashboard">Members</a></li>
            <li><a href="/views/messages">Messages</a></li>
            <li><a href="/views/logoff">Log Off</a></li>
          </ul>
        </div>
      
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <hr>
            <li class="active"><a href="#">Team Home Page<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Team Members</a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="row" id="top-sticky">
                <div class="col-sm-10 col-md-10">
                    <div class="page-header" >
                        <h3>Welcome, <?= $this->session->userdata('first_name');?></h3>
                    </div>
                    <h4>Enter Data for the Event</h4>
    <?php if($this->session->flashdata("stats_error")){
        echo $this->session->flashdata("stats_error");
    } ?>
                  <form class="form-horizontal" action="/stats/add_stats" method="post">
                    <div class="form-group">
                        <label for="donation" class="col-sm-4 control-label">Donation Amount:</label>
                        <div class="col-sm-5">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                               <input type="text" name="donation" class='form-control'>
                            <div class="input-group-addon">.00</div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="attendees" class="col-sm-4 control-label">Number Of Attendees:</label>
                        <div class="col-sm-5">
                            <input type="text" name="attendees" class='form-control'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="team" class="col-sm-4 control-label">Select Team:</label>
                        <div class="col-sm-5">
                            <select name='team' class='chosen-select form-control'>
                                <option value='0'></option>
                                <option value='Havard'>Havard</option>
                                <option value='UCLA'>UCLA</option>
                                <option value='San Jose State'>San Jose State</option>
                                <option value='Stanford'>Stanford</option>
                                <option value='NYU'>NYU</option>
                                <option value='MIT'>MIT</option>
                                <option value='Texas'>Texas</option>
                                <option value='Pennsylvania'>Pennsylvania</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event" class="col-sm-4 control-label">Event:</label>
                        <div class="col-sm-5">
                            <select name='event' class='chosen-select form-control'>
                                <option value='Fried Oreo'>Fried Oreo</option>
                                <option value='Spandex Guy'>Spandex Guy</option>
                                <option value='Fun Run'>Fun Run</option>
                                <option value='Competitions'>Competitions</option>
                                <option value='Concert'>Concert</option>
                                <option value='Documentary Screening'>Documentary Screening</option>
                                <option value='Tournament'>Tournament</option>
                                <option value='Dance Marathon'>Dance Marathon</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="month" class="col-sm-4 control-label">Month:</label>
                        <div class="col-sm-5">
                            <select name='month' class='chosen-select form-control'>
                                <option value='Jan'>Jan</option>
                                <option value='Feb'>Feb</option>
                                <option value='March'>March</option>
                                <option value='April'>April</option>
                                <option value='May'>May</option>
                                <option value='June'>June</option>
                                <option value='July'>July</option>
                                <option value='Aug'>August</option>
                                <option value='Sep'>September</option>
                                <option value='Oct'>October</option>
                                <option value='Nov'>November</option>
                                <option value='Dec'>December</option>
                            </select>
                        </div>                     
                    </div>
                    <input class="btn btn-default" type="submit" value="Submit">
                  </form>
              </div>
          </div>
          <div class="col-sm-10 col-md-10">
          <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        <!-- <h3>FOR FUTURE VERSIONS</h3> -->
<!--         <form action="/stats/show" method="post">
             <label>Select Month to Display Stats</label>
        <select name='month'><br>
            <option value='Jan'>Jan</option>
            <option value='Feb'>Feb</option>
            <option value='March'>March</option>
            <option value='April'>April</option>
            <option value='May'>May</option>
            <option value='June'>June</option>
            <option value='July'>July</option>
            <option value='Aug'>August</option><br>
            <input type="submit" name="login" value="Submit">
        </select><br>
        </form>
    <br>
    <br> -->
        <!-- <form action="/stats/show_events" method="post">
             <label>Select Event to Display Stats</label>
        <select name='event'><br>
            <option value='Fried Oreo'>Fried Oreo</option>
            <option value='Spandax Guy'>Spandax Guy</option>
            <option value='Fun Run'>Fun Run</option>
            <option value='Competitions'>Competitions</option>
            <option value='Concert'>Concert</option>
            <option value='Document Screening'>Document Screening</option>
            <br>
            <input type="submit" name="login" value="Submit">
        </select><br>
        </form> -->
            <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            <div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        </div>
      </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">LINK!</p>
    </div>
</footer>
  </body>
</html>