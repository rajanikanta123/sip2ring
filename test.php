<?php
    require 'vendor/autoload.php';
    use Plivo\RestAPI;
    $auth_id = "SAOTM0MJAZMJRKNZNIMT";
    $auth_token = "NDFkMmRmNDVlYzE5ZGM2Yzk2MTc1OWMxZjI5MjI2";
    $p = new RestAPI($auth_id, $auth_token);
    $params = array(
        'to' => '917504018184',   # The phone numer to which the call will be placed
        'from' => '919439176375', # The phone number to be used as the caller id

        # answer_url is the URL invoked by Plivo when the outbound call is answered
        # and contains instructions telling Plivo what to do with the call
        'answer_url' => "https://s3.amazonaws.com/static.plivo.com/answer.xml",
        'answer_method' => "GET", # The method used to call the answer_url

        # Example for asynchronous request
        # callback_url is the URL to which the API response is sent.
        #'callback_url' => "http://myvoiceapp.com/callback/",
        #'callback_method' => "GET" # The method used to notify the callback_url.
    );

    # Make an outbound call and print the response
    $response = $p->make_call($params);
	echo '<pre>';
    print_r ($response);
?>