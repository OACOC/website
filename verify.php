
  <?php
  if(isset($_POST['submit'])):
      if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
  		//your site secret key
          $secret = '6Lf0pBoUAAAAAKK0drERR1wBkRt5ZT7q7LAued7H';
  		//get verify response data
          $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
          $responseData = json_decode($verifyResponse);

  		$first_name = !empty($_POST['first_name'])?$_POST['first_name']:'';
      $last_name = !empty($_POST['last_name'])?$_POST['last_name']:'';
      $full_name = !empty($_POST['full_name'])?$_POST['full_name']:'';
      // Creat a full name variable if needed.
      //$full_name = $first_name . ' ' . $last_name;
  		$email = !empty($_POST['email'])?$_POST['email']:'';
  		$message = !empty($_POST['message'])?$_POST['message']:'';
          if($responseData->success):
  			//contact form submission code
  			$to = 'andycfs@gmail.com ';
  			$subject = 'OACOC New contact form has been submitted';
  			$htmlContent = "
  				<h1>Contact request details</h1>
  				<p><b>Name: </b>".$full_name."</p>
  				<p><b>Email: </b>".$email."</p>
  				<p><b>Message: </b>".$message."</p>
  			";
  			// Always set content-type when sending HTML email
  			$headers = "MIME-Version: 1.0" . "\r\n";
  			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  			// More headers
  			$headers .= 'From:'.$full_name.' <'.$email.'>' . "\r\n";
  			//send email
  			@mail($to,$subject,$htmlContent,$headers);

        $succMsg = 'Your contact request has submitted successfully.';
        ?>

        <?php if(!empty($succMsg)): ?><div class="succMsg"><?php echo $succMsg; ?></div><?php endif; ?>

        <?php
          // Print a message.
          print "<div>Thank you $full_name for your message:
            <p>$message...</p>
            <p>You will be contacted at $email shortly.</p>
            </div>";
        ?>

        <?php
  			$name = '';
  			$email = '';
  			$message = '';
          else:
              $errMsg = 'Spambot verification failed, please try again.';
          endif;
      else:
          $errMsg = 'Please click on the reCAPTCHA box.';
      ?>
      <?php if(!empty($errMsg)): ?><div class="errMsg"><?php echo $errMsg; ?></div><?php endif; ?>
      <?php
      endif;
  else:
      $errMsg = '';
      $succMsg = '';
  	$name = '';
  	$email = '';
  	$message = '';
  endif;
  ?>

    </body>
  </html>
