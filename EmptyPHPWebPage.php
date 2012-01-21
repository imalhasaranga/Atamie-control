<?php
  $gatewayURL  =   'http://localhost:9501/ozeki?';
  $request = 'login=admin';
  $request .= '&password=abc123';
  $request .= '&action=sendMessage';
  $request .= '&messageType=SMS:TEXT';
  $request .= '&recepient='.urlencode('+36205222245');
  $request .= '&messageData='.urlencode("Hello World");

  $url =  $gatewayURL . $request;

  //Open the URL to send the message
   file($url);
?>