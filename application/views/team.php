<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liberty in North Korea</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/team.css" rel="stylesheet">
  </head>
  <body>
  <div class= "navbar nav">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
               <a class="navbar-brand" href="/"><img  id="logo" src="/assets/img/logo.png"></a>
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
  <div class= "container">
    <div class= "container text-center">
      <div id="topper">
          <div id="team_name">
                <h1>University of Texas at Austin</h1>
          </div>
          <div id="team_stats">
                <div class="stat_box">
                  <p>ACTIVE MEMBERS</p>
                  <h1>32</h1>
                </div>
                <div class="stat_divider"></div>
                <div class="stat_box">
                    <p>TEAM GOAL</p>
                    <h1>$10,000</h1>
                </div>
                <div class="stat_divider"></div>
                <div class="stat_box">
                    <p>RAISED SO FAR</p>
                    <h1>$30,000</h1>
                </div>
                <div class="stat_divider"></div>
                <div class="stat_box">
                    <p>TEAM RANK (out of 366)</p>
                    <h1>1</h1>
                </div>
          </div>
      </div>
      <div id="members">
          <div class="member">

              <div class="shown_info">
                  <img src="/assets/img/faces/ani.jpg">
                  <h3>Ani D</h3>
              </div>

              <div class="hidden_info">
                  <h3>Ani D</h3>
                  <table>
                      <tr>
                          <td>Raised:</td>
                          <td>$300</td>
                      </tr>
                      <tr>
                          <td>Hobbies:</td>
                          <td>Helping People</td>
                      </tr>
                      <tr>
                          <td>Graduation:</td>
                          <td>May 2016</td>
                      </tr>
                      <tr>
                          <td>Phone #:</td>
                          <td>(408) 556 - 2981</td>
                      </tr>
                      <tr>
                          <td>Email:</td>
                          <td>animydude@gmail.com</td>
                      </tr>
                      <tr>
                          <td>LINK Chat:</td>
                          <td><a href="/messages/">Chat Now</a></td>
                      </tr>
                  </table>
              </div>

          </div>

          <div class="member">

              <div class="shown_info">
                  <img src="/assets/img/faces/jalal.jpg">
                  <h3>Jalal B</h3>
              </div>

              <div class="hidden_info">
                  <h3>Jalal Beauchman</h3>
                  <table>
                      <tr>
                          <td>Raised:</td>
                          <td>$1000000</td>
                      </tr>
                      <tr>
                          <td>Hobbies:</td>
                          <td>Helping People</td>
                      </tr>
                      <tr>
                          <td>Graduation:</td>
                          <td>May 2016</td>
                      </tr>
                      <tr>
                          <td>Phone #:</td>
                          <td>(408) 556 - 2981</td>
                      </tr>
                      <tr>
                          <td>Email:</td>
                          <td>jalalbeauchman@gmail.com</td>
                      </tr>
                      <tr>
                          <td>LINK Chat:</td>
                          <td><a href="/messages/">Chat Now</a></td>
                      </tr>
                  </table>
              </div>

          </div>

          <div class="member">

              <div class="shown_info">
                  <img src="/assets/img/faces/michael.jpg">
                  <h3>Michael Sensei</h3>
              </div>

              <div class="hidden_info">
                  <h3>Michael Sensei</h3>
                  <table>
                      <tr>
                          <td>Raised:</td>
                          <td>$790</td>
                      </tr>
                      <tr>
                          <td>Hobbies:</td>
                          <td>Helping People</td>
                      </tr>
                      <tr>
                          <td>Graduation:</td>
                          <td>May 2016</td>
                      </tr>
                      <tr>
                          <td>Phone #:</td>
                          <td>(408) 556 - 2981</td>
                      </tr>
                      <tr>
                          <td>Email:</td>
                          <td>animydude@gmail.com</td>
                      </tr>
                      <tr>
                          <td>LINK Chat:</td>
                          <td><a href="/messages/">Chat Now</a></td>
                      </tr>
                  </table>
              </div>

          </div>

          <div class="member">

              <div class="shown_info">
                  <img src="/assets/img/faces/ray.jpg">
                  <h3>Ray</h3>
              </div>

              <div class="hidden_info">
                  <h3>Ray</h3>
                  <table>
                      <tr>
                          <td>Raised:</td>
                          <td>$790</td>
                      </tr>
                      <tr>
                          <td>Hobbies:</td>
                          <td>Helping People</td>
                      </tr>
                      <tr>
                          <td>Graduation:</td>
                          <td>May 2016</td>
                      </tr>
                      <tr>
                          <td>Phone #:</td>
                          <td>(408) 556 - 2981</td>
                      </tr>
                      <tr>
                          <td>Email:</td>
                          <td>animydude@gmail.com</td>
                      </tr>
                      <tr>
                          <td>LINK Chat:</td>
                          <td><a href="/messages/">Chat Now</a></td>
                      </tr>
                  </table>
              </div>

          </div>

          <div class="member">

              <div class="shown_info">
                  <img src="/assets/img/faces/isaac.jpg">
                  <h3>Isaac Lee</h3>
              </div>

              <div class="hidden_info">
                  <h3>Isaac Lee</h3>
                  <table>
                      <tr>
                          <td>Raised:</td>
                          <td>$790</td>
                      </tr>
                      <tr>
                          <td>Hobbies:</td>
                          <td>Helping People</td>
                      </tr>
                      <tr>
                          <td>Graduation:</td>
                          <td>May 2016</td>
                      </tr>
                      <tr>
                          <td>Phone #:</td>
                          <td>(408) 556 - 2981</td>
                      </tr>
                      <tr>
                          <td>Email:</td>
                          <td>isaac@gmail.com</td>
                      </tr>
                      <tr>
                          <td>LINK Chat:</td>
                          <td><a href="/messages/">Chat Now</a></td>
                      </tr>
                  </table>
              </div>

          </div>

      </div>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/team.js"></script>
  </body>
</html>
