<?php
if (empty($_POST)) {
	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit();
}

//Creates function that removes magic escaping, if it's been applied, from values and then removes extra newlines and returns to foil spammers.
function clear_user_input($value) {
	if (get_magic_quotes_gpc()) $value=stripslashes($value);
	$value= str_replace( "\n", '', trim($value));
	$value= str_replace( "\r", '', $value);
	return $value;
	}


if ($_POST['comments'] == 'Please share any comments you have here') $_POST['comments'] = '';	

//Create body of message by cleaning each field and then appending each name and value to it

$body ="Sent from portfolio contact form:\n";

foreach ($_POST as $key => $value) {
	if(is_array($value)){ 				// if this post element is a checkbox group or multiple select box
		$value = implode(', ',$value);	// show array of values selected
		
	}

	$key = clear_user_input($key); 
	$value = clear_user_input($value);
	$$key = $value;
	
	$body .= "$key: $value\n";
}


//Create header that puts email in From box along with name in parentheses
$from='From: '. $email . "(" . $name . ")" . "\r\n"; 
	
//for final testing, comment out the above line and uncomment the one below, replacing yourname@domain.com with your own email address: 		
//$from='From: '. $email . "(" . $name . ")" . "\r\n" . 'Bcc: thomitchell@gmail.com' . "\r\n";
// sends bcc to alternate address 

//Creates intelligible subject line that shows where it came from
$subject = 'Email from your portfolio contact form'; 

// for troubleshooting, uncomment the two lines below. Send your form, and you'll get a browser message showing your results.
//echo "mail ('clientname@domain.com', $subject, $body, $from)";
//exit();

//Sends email, with elements created above
mail('thomitchell@gmail.com', $subject, $body);

// replace "thx.html" with the name and path to your actual thank you page
//header('Location: thx.html'); 