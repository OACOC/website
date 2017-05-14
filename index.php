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
    <?php include_once("analyticstracking.php") ?>

    <section class="hero_homepage">

      <?php include('header.php'); ?>

      <div class="container">
        <div class="row">
          <div class="offair">
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

        <div class="liveaudio">
          <div class="row jumbotron">
            <h1 class="cen-horz">Welcome To OA Live</h1>
            <h1 class="cen-horz"><small>Sunday May 07, 2017</small></h1>
            <div class="col-md-12 img_container">
              <div class="col-md-4">
                <img class="img-responsive" src="Images/Title-Graphic-Trust.jpg" alt="Sermon Title Graphic">
              </div>
              <div class="col-md-8">
                <iframe style="border: 1px solid #000;border-radius:6px" src="https://mixlr.com/users/2348606/embed?artwork=false" width="100%" height="180px" scrolling="no" frameborder="no" marginheight="0" marginwidth="0"></iframe>
              </div>
            </div>
            <div class="col-md-12">
              <h2 class="cen-horz">Upcoming Sermon - "Trust"</h2>
              <h4 class="cen-horz">Sermon will begin at approximately 10:35</h4>
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
          <div class="col-md-6">
            <!--<h2 style="text-align:left">Sermon Series:</h2>-->
            <h2 style="text-align:left">Upcoming Worship Service</h2>
            <h2>"A Mother's Faith"</h2>
            <div class="row">
              <div class="col-md-6">
                <img class="img-responsive titlegraphic" src="Images/Title-Graphic-MothersFaith.jpg" alt="Sermon Title Graphic">
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
              <div class="col-md-6">
                <h4>Sunday, May 14, 2017</h4>
                <h3>"A Mother's Faith"</h3>
                <P>This Sunday’s message at Orange Ave. is not about how to be good to your mother; the message is about a mother who had to make hard choices for the welfare of her son. Being a mom or a dad isn't for the faint of heart. It requires tough decisions—decisions that are risky and heart-wrenching, decisions that require faith.</p>
                <div class="viewarchives">
                  <a href="sermons.php">View Sermon Archives</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <h2 style="text-align:center">Series Archive</h2>
            <h2 style="text-align:center">Listen, Share, Download</h2>
            <div class="row">
              <div class="col-md-12">
                <div class="sermons">
                  <div class="date">
                    <span class="month">May</span>
                    <span class="day">14</span>
                  </div>
                  <div class="sermonarchives">
                    <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/322575631&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
                    <!--<h4>"Heart & Soul"</h4>-->
                  </div>
                </div>

                <div class="sermons">
                  <div class="date">
                    <span class="month">May</span>
                    <span class="day">07</span>
                  </div>
                  <div class="sermonarchives">
                    <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/321414110&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
                    <!--<h4>"Trust"</h4>-->
                  </div>
                </div>

                <div class="sermons">
                  <div class="date">
                    <span class="month">Apr</span>
                    <span class="day">16</span>
                  </div>
                  <div class="sermonarchives">
                    <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/317942607&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
                    <!--<h4>Bold Speaking</h4>-->
                  </div>
                </div>
                <div class="sermons">
                  <div class="date">
                    <span class="month">Apr</span>
                    <span class="day">09</span>
                  </div>
                  <div class="sermonarchives">
                    <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/316852783&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
                    <!--<h4>"Where Everybody Knows Your Name"</h4>-->
                  </div>
                </div>

                <!--<div class="sermons">
                  <div class="date">
                    <span class="month">Mar</span>
                    <span class="day">26</span>
                  </div>
                  <div class="sermonarchives">
                    <iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/314548262&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true"></iframe>
                    <h4>Bold Obedience</h4>
                  </div>
                </div>-->

                  </div>
                </div>
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
            <h1 class="cen-horz">COMING SOON</h1>
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
          <a style="margin:5px 5px" class="btn btn-default btn-lg" href="242lessons.php" role="button">Study Resources</a>
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
