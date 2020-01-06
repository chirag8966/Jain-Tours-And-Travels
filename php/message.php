<?php

	// Account details
	$apiKey = urlencode('+BUNzOLU5gA-j3IGCWTtkFkeG3jkywnO4WWZvzabIK');
    
    //acquiring details
    $source = "Indore";
    $destination = $_POST['destination'];
    $contact = $_POST['contact'];
    $pickUpDate = $_POST['pickUpDate'];
    $dropDate = $_POST['dropDate'];
    $car = $_POST['car'];
    $time = $_POST['time'];

    // Message details
	$numbers = array('91'.$contact);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('We have recieved your enquiry successfully.\r\n Our team will get back to you soon . \r\n Jain Tour & Travels \r\n 9425055268');
 
	// $numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender,"test" => true , "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
    // Process your response here
	echo $response;
?>