<?php
  require_once('recaptchalib.php');
  $publickey = "6LcqfOMSAAAAAOHssk7MkYsEqapSPiNMZyMI2FhB"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
?>