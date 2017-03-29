<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orange Avenue Church of Christ</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
    <!-- Custom css -->
    <link href="css/ionicons.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--<link href="css/simple-sidebar.css" rel="stylesheet">-->

    <style>
      #landing {
        position: relative;
      	text-align: center;
      	color: #000;
        min-height: 100vh;
        width: 100%;
      }
      #map {
        height: 300px;
      }
      #slideIn {
        display: none;
      }
    </style>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- fav icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="icons/favicon.ico" type="image/x-icon">
  </head>

  <body>
    <div id="landing">

      <?php include('header.php') ?>

      <!--<h3>Contact, Hours & Directions to Central Florida's RV and Truck center headquarters.</h3>
      <h1>Nichols RV & Truck Center - 2900 Kurt St. Eustis, FL 32726</h1>-->

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Say Hello! - Contact Form</h2>
            <h3>Need Information? Need Help? Contact Us Today!</h3>
            <form id="demo-form" class="form-horizontal" action="verify.php" method="post">
              <div class="form-group">
                <label for="fullName" class="control-label col-md-2">Full Name:</label>
                <div class="col-md-10">
                  <input id="fullName" class="form-control" type="text" name="full_name" size="50" placeholder="First & Last Name" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Email:</label>
                <div class="col-md-10">
                  <input id="inputEmail" class="form-control" type="email" name="email" size="50" placeholder="jane.doe@email.com" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputMessage" class="col-md-2 control-label">Message:</label>
                <div class="col-md-10">
                  <textarea id="inputMessage" class="form-control" name="message" rows="9" cols="30" required></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <div class="g-recaptcha" data-sitekey="6Lf0pBoUAAAAALxW9Pi-HZEJOUrYgWkwcOU3Q1dx"></div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <!--<button
                  class="g-recaptcha btn btn-success" type="submit" name="submit"
                  data-sitekey="6Lf0pBoUAAAAALxW9Pi-HZEJOUrYgWkwcOU3Q1dx"
                  data-callback="OnSubmit">
                  Submit
                </button>-->
                  <button class="btn btn-success" type="submit" name="submit">Send</button>
                  <!--<button class="btn btn-success" type="submit" name="submit" data-toggle="modal" data-target="#myModal">Send</button>-->
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 op-hours">
            <h2 style="color:blue"><i class="ion-android-call social-icon" style="color:blue;"></i> CALL 352-357-6616</h2>
            <h2>Hours of Operation</h2>
            <table class="table table-striped">
              <tr>
                <td>Sunday</td>
                <td>8:30 AM - 1:00 PM 4:30PM - 6:00 PM</td>
              </tr>
              <tr>
                <td>Monday</td>
                <td>8:30 AM - 5:00 PM</td>
              </tr>
              <tr>
                <td>Tuesday</td>
                <td>8:30 AM - 5:00 PM</td>
              </tr>
              <tr>
                <td>Wednesday</td>
                <td>8:30 AM - 5:00 PM</td>
              </tr>
              <tr>
                <td>Thursday</td>
                <td>8:30 AM - 5:00 PM</td>
              </tr>
              <tr>
                <td>Friday</td>
                <td>8:30 AM - 12:00 PM</td>
              </tr>
              <tr>
                <td>Saturday</td>
                <td>Closed</td>
              </tr>
            </table>
          </div>

        </div>
      </div>
    <div class="ribbon">
    	<h2 class="ribbon-subhead">1511 E Orange Ave Eustis Florida 32726</h2>
    </div>
      <div class="container-fluid remove-pad">
        <div class="row remove-marg">
          <div class="col-md-12 remove-pad">
            <div id="floating-button">
              <a href="directionsMap.php"><button id="start-btn" type="submit" class="btn btn-success" name="submit">Get Directions</button></a>
            </div>
            <div id="map"></div>
          </div>
        </div>
      </div>
    </div>

    <?php include('footer.php'); ?>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/pagemap.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeCxu70I6of6fYP2if0YqeIQYxMbfAFNc&callback=initMap"
    async defer></script>
  </body>
</html>
