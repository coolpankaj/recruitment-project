  <?php
  if (isset($_POST['submit'])) {
  
  require_once('/recaptcha/recaptchalib.php');
  $privatekey = "6LegAkAUAAAAAMrLMkLNV4PVbOHcQL9j7n8T7mxg";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {

    // What happens when the CAPTCHA was entered incorrectly
    //die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
        // "(reCAPTCHA said: " . $resp->error . ")");
  	echo "<script>alert('entered wrong');</script>";
  		echo "<script>window.location.href='index.php';</script>";
  } else {
    // Your code here to handle a successful verification
    echo "<script>alert('okk.. it works ');</script>";
  }}
  ?>
