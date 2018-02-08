<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* GOOGLE reCaptcha helper for verifying the responsee from user
    make curl post  call to google
    Submit secret,response from form,remoteip
*/
function verifyrecap($secret,$response,$remoteip){
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
  'secret' => $secret,
  'response' => $response,
  'remoteip' => $remoteip
  );
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  $result = json_decode(curl_exec($ch));


  curl_close($ch);
return $result;
}
