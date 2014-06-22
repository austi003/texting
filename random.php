<?php

require('twilio_php/twilio-php/Services/Twilio.php');

$sid = "ACfdf0e0b646d0d5280ee209d2fae89c55"; // Your Account SID from www.twilio.com/user/account
$token = "555231c0ab09c84675719fbe01904cb0"; // Your Auth Token from www.twilio.com/user/account

$client = new Services_Twilio($sid, $token);
$message = $client->account->messages->sendMessage(
  '6788658131', // From a valid Twilio number
  'XXX9755854', // Text this number
  "Hello monkey!"
);

print $message->sid;

