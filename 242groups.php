<!DOCTYPE html>
<html>
  <head>
        <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6Lf0pBoUAAAAALxW9Pi-HZEJOUrYgWkwcOU3Q1dx'
        });
      };
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orange Avenue Church of Christ</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- fav icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="icons/favicon.ico" type="image/x-icon">
  </head>

  <body>
    <?php include_once("analyticstracking.php") ?>

    <section class="group242_homepage">

      <?php include('header.php'); ?>

      <div class="container">
        <div class="row info-mods">
          <?php include('242header.php'); ?>
        </div>
      </div>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Host(s)</th>
                      <th>Contact</th>
                      <th>Location</th>
                      <th>Children</th>
                      <th>Teens</th>
                      <th>Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Drew Shepherd/Amy O'Neal</td>
                      <td>
                          <button class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#contactModal" role="button">Contact</button>
                          <!--<script language="JavaScript">
                            var username = "drew.shepherd";
                            var hostname = "myoacoc.org";
                            var linktext = username + "@" + hostname ;
                            document.write("<a class="btn btn-default btn-sm" href='" + "mail" + "to:" + username + "@" + hostname + "' role="button">"Contact"</a>");
                          </script>-->
                      </td>
                      <td>Sorrento</td>
                      <td>&#10004;</td>
                      <td>&#10004;</td>
                      <td>Sunday 2PM</td>
                    </tr>
                    <tr>
                      <td>Charlie & Jen Marcussen</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Eustis</td>
                      <td>&#10004;</td>
                      <td>&#10004;</td>
                      <td>Contact Leader</td>
                    </tr>
                    <tr>
                      <td>Chris & Tonya Hagan</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Mount Dora</td>
                      <td>&#10004;</td>
                      <td>&#10004;</td>
                      <td>Contact Leader</td>
                    </tr>
                    <tr>
                      <td>Adams/Bay Famlies</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Leesburg</td>
                      <td>&#10008;</td>
                      <td>&#10008;</td>
                      <td>Contact Leader</td>
                    </tr>
                    <tr>
                      <td>Tim & Sabrina Deem</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Tavares</td>
                      <td>&#10008;</td>
                      <td>&#10008;</td>
                      <td>Sunday 12:30PM</td>
                    </tr>
                    <tr>
                      <td>Jerry & Kristi Holder</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Apopka</td>
                      <td>&#10008;</td>
                      <td>&#10008;</td>
                      <td>Contact Leader</td>
                    </tr>
                    <tr>
                      <td>Baker/Ross Families</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Mount Dora</td>
                      <td>&#10004;</td>
                      <td>&#10004;</td>
                      <td>Sunday 2PM</td>
                    </tr>
                    <!--<tr>
                      <td>Katie McKay (ASL)</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="mailto:webmaster@myoacoc.org" role="button">Contact</a>
                      </td>
                      <td>Eustis</td>
                      <td>&#10004;</td>
                      <td>&#10004;</td>
                      <td>Contact Leader</td>
                    </tr>-->
                    <tr>
                      <td>Mike & Karen Cockrell</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Eustis</td>
                      <td>&#10004;</td>
                      <td>&#10004;</td>
                      <td>Sunday 4PM</td>
                    </tr>
                    <tr>
                      <td>Ron & Elizabeth Brackett</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Eustis</td>
                      <td>&#10008;</td>
                      <td>&#10008;</td>
                      <td>Sunday 1:30PM</td>
                    </tr>
                    <tr>
                      <td>Mark & Michelle Baker</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Zellwood</td>
                      <td>&#10004;</td>
                      <td>&#10004;</td>
                      <td>Contact Leader</td>
                    </tr>
                    <tr>
                      <td>Ronnie & Laura Sexton</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Eustis</td>
                      <td>&#10008;</td>
                      <td>&#10004;</td>
                      <td>Contact Leader</td>
                    </tr>
                    <tr>
                      <td>Troy & Rebecca Allen</td>
                      <td>
                          <a class="btn btn-default btn-sm" href="242groups.php" role="button">Contact</a>
                      </td>
                      <td>Mount Dora</td>
                      <td>&#10008;</td>
                      <td>&#10004;</td>
                      <td>Contact Leader</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <h2 class="cen-horz livebtn">
                  <a style="margin:5px 5px" class="btn btn-default btn-lg" href="242lessonss.php" role="button">Study Resources</a>
                  <!--<a style="display:inline" class="btn btn-default btn-lg btn-block" href="smallgroups.php" role="button">Start a Group</a>-->
                </h2>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include('footer.php'); ?>

  <!-- Modal -->

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="contactModalLabel">Welcome to Orange Avenue</h4>
      </div>
      <div class="modal-body">
            <form id="contact_form" class="form-horizontal" action="verify.php" name="feedback" method="post">
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
                  <div id="html_element"></div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <button id="submitForm" class="btn btn-success" type="submit" name="submit">Send</button>
                </div>
              </div>
            </form>
                <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      <script src="https://use.fontawesome.com/d74f0711c6.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/form_process.js"></script>
  </body>
</html>
