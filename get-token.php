<?php 
require_once('config.php');

use Twilio\Rest\Client;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VoiceGrant;
use Twilio\Jwt\ClientToken;

$identity = "SulochanaTutorials";
$accountSid = getenv('TWILLIO_ACCOUNT_SID');;
$authToken  = getenv('TWILLIO_ACCOUNT_SECRET');
$appSid = getenv('TWILLIO_TWIML_APP_ID');

$capability = new ClientToken($accountSid, $authToken);
$capability->allowClientOutgoing($appSid);
$capability->allowClientIncoming($identity);
$token = $capability->generateToken();

$response = [
  'identity'=>$identity,
  'token'=>$token
];

echo json_encode($response);