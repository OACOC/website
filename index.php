<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orange Avenue Church of Christ</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Pacifico" rel="stylesheet">

    <!-- fav icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="icons/favicon.ico" type="image/x-icon">
  </head>

  <body>
    <section class="hero_homepage">

      <?php include('header.php'); ?>

      <div class="container">
        <div class="row">
          <div style="padding: 0 0;margin-bottom:2.0rem;" class="col-md-8 vid_contain">
            <section class="vid_teaser">
              <div class="vid_static">
                <div class="vid_contain vid_big">
                  <video autoplay="autoplay" muted="muted" loop="loop"> <!-- autoplay="autoplay" poster="images/OACOCBuildingFront.jpg"-->
                    <source src="videos/oacoc_teaser2.mp4" type="video/mp4">
                    <source src="videos/oacoc_teaser2.webm" type="video/webm">
                    <source src="videos/oacoc_teaser2.ogv" type="video/ogg">
                    Your browser does not support the video tag.
                  </video>
                </div>
                  <a class="vid_overlay" href="#" data-toggle="modal" data-target="#myModal">
                    <span class="video_teaser">
                      <h4>ALL ARE</h4>
                      <h1>WELCOME</h1>
                      <h4>WE WORSHIP SUNDAYS AT 10 AM</H4>
                      <img src="Images/icon-video-play.svg" class="play_icon" alt="Play video">
                      <h3 class="oa_font">Orange Avenue Church of Christ</h3>
                    </span>
                  </a>
              </div>
            </section>
          </div>
          <div class="col-md-4">
            <div class="hero-mod">
              <a href="#">
              <img class="card_img" src="Images/gospels.svg" width=128 alt"Who is Jesus">
              <div class="card_content">
                <h5>Who is Jesus?</h5>
              </div>
            </a>
            </div>
            <div class="hero-mod">
              <a href="#">
              <img class="card_img" src="Images/believe.svg" width=128 alt"What we believe">
              <div class="card_content">
                <h5>What We Believe</h5>
              </div>
            </a>
            </div>
            <div class="hero-mod">
              <a href="#">
              <img class="card_img" src="Images/newhere.svg" width=128 alt"New here?">
              <div class="card_content">
                <h5>New Here?</h5>
              </div>
            </a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row info-mods">
          <div class="col-md-12">
            <h3 class="episode_date cen-horz">Be Part of God's Amazing Family</h3>
            <div class="cen-horz">
              <img class="oacocfamily" src="Images/Phil.jpg" width="50">
              <img class="oacocfamily" src="Images/deb2.jpg" width="50">
              <img class="oacocfamily" src="Images/andy.jpg" width="50">
              <img class="oacocfamily" src="Images/jane.jpg" width="50">
              <img class="oacocfamily" src="Images/scott.jpg" width="50">
              <img class="oacocfamily" src="Images/Phil.jpg" width="50">
              <img class="oacocfamily" src="Images/deb2.jpg" width="50">
              <img class="oacocfamily" src="Images/andy.jpg" width="50">
              <img class="oacocfamily" src="Images/jane.jpg" width="50">
              <img class="oacocfamily" src="Images/scott.jpg" width="50">
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row info-mods">
          <div class="col-md-12">
            <h2 style="text-align:left">Current Sermon Series</h2>
            <h2>BOLD</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <!--<h3>January 1 thru January 22</h3>-->
            <img class="img-responsive titlegraphic" src="Images/Title-Graphic-Bold.jpg" alt="Sermon Title Graphic">
              <div id="clockdiv" style="text-align:center">
                <div>
                  <span class="days"></span>
                  <div class="smalltext">Days</div>
                </div>
                <div>
                  <span class="hours"></span>
                  <div class="smalltext">Hours</div>
                </div>
                <div>
                  <span class="minutes"></span>
                  <div class="smalltext">Minutes</div>
                </div>
                <!--<div>
                  <span class="seconds"></span>
                  <div class="smalltext">Seconds</div>
                </div>-->
              </div>
            <div class="cen-horz livebtn">
              <a class="btn btn-default btn-lg btn-block" href="sermons.php" role="button">Listen Live</a>
            </div>
          </div>
          <div class="col-md-3">
            <h4>Sunday, March 26, 2017</h4>
            <h3>Bold Obedience</h3>
            <P>At Orange Ave. this week we will be in our fourth and final week of our sermon series “BOLD”.</p>
              <div class="viewarchives">
                <a href="#">View Sermon Archives</a>
              </div>
          </div>
          <div class="col-md-6">
            <div class="sermons">
              <div class="date">
                <span class="month">Mar</span>
                <span class="day">05</span>
              </div>
              <div class="sermonarchives">
                <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/310830588&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
                <!--<h4>Amazing Boldness</h4>-->
              </div>
            </div>
            <div class="sermons">
              <div class="date">
                <span class="month">Mar</span>
                <span class="day">12</span>
              </div>
              <div class="sermonarchives">
                <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/312000624&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
                <!--<h4>Bold Prayers</h4>-->
              </div>
            </div>
            <!--<div class="sermons">
              <div class="date">
                <span class="month">Mar</span>
                <span class="day">19</span>
              </div>
              <div class="sermonarchives">
                <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/313244051&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
              </div>
            </div>
            <div class="sermons">
              <div class="date">
                <span class="month">Feb</span>
                <span class="day">12</span>
              </div>
              <div class="sermonarchives">
                <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/307367825&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
              </div>
            </div>
            <div class="sermons">
              <div class="date">
                <span class="month">Feb</span>
                <span class="day">05</span>
              </div>
              <div class="sermonarchives">
                <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/306241761&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
              </div>
            </div>
            <div class="sermons">
              <div class="date">
                <span class="month">jan</span>
                <span class="day">29</span>
              </div>
              <div class="sermonarchives">
                <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/305095959&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
            </div>-->

          <div class="sermons">
            <div class="date">
              <span class="month">Mar</span>
              <span class="day">19</span>
            </div>
            <div class="sermonarchives">
              <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/313244051&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
              <!--<h4>Bold Speaking</h4>-->
            </div>
          </div>
          <div class="sermons">
            <div class="date">
              <span class="month">Mar</span>
              <span class="day">26</span>
            </div>
            <div class="sermonarchives">
              <!--<iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/305095959&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>-->
              <h4>Bold Obedience</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid oaCentral-cont">
      <div class="row">
        <div class="col-md-12 oaCentral">
          <div class="center-vert-horz">
            <h1 class="cen-horz">OA CENTRAL</h1>
            <img class="img-responsive" src="logos/OA_Atom.png">
            <h1 class="cen-horz">COMING MAY 1ST</h1>
          </div>
        </div>
      </div>
    </div>

      <div class="container mod-242">
        <div class="row info-mods">
          <div class="col-md-12 cen-horz">
            <h1>242 Small Groups - Sharing Life Together</h1>
          </div>
        </div>

        <?php include('242header.php'); ?>

      <div class="row">
        <h2 class="cen-horz livebtn">
          <a style="margin:5px 5px" class="btn btn-default btn-lg" href="242lessonss.php" role="button">Study Resources</a>
          <a style="margin:5px 5px" class="btn btn-default btn-lg" href="242groups.php" role="button">Find a Group</a>
          <!--<a style="display:inline" class="btn btn-default btn-lg btn-block" href="smallgroups.php" role="button">Start a Group</a>-->
        </h2>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Welcome to Orange Avenue</h4>
      </div>
      <div class="modal-body">
        <video preload id="video1" controls>
          <source src="videos/Barnes_welcome.mp4" type="video/mp4">
          <source src="videos/Barnes_welcome.webm" type="video/webm">
          <source src="videos/Barnes_welcome.ogv" type="video/ogg">
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <script src="https://use.fontawesome.com/d74f0711c6.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Latest compiled and minified CSS -->
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>

<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#video1')[0].play();
})
$('#myModal').on('hidden.bs.modal', function () {
  $('#video1')[0].pause();
})
</script>
  </body>
</html>
