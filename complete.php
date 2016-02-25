<?php

   // initiate variables from $_POST

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$company = $_POST['company'];
$company_url = $_POST['company_url'];
$email = $_POST['email'];

   //Process a new form submission in HubSpot in order to create a new Contact.

$hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
$ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
$hs_context      = array(
    'hutk' => $hubspotutk,
    'ipAddress' => $ip_addr,
    'pageUrl' => 'http://assessment.tributemedia.com/results.php',
    'pageName' => 'Assessment-Results'
);
$hs_context_json = json_encode($hs_context);

//Need to populate these varilables with values from the form.
$str_post = "firstname=" . urlencode($first_name)
    . "&lastname=" . urlencode($last_name)
    . "&email=" . urlencode($email)
		. "&company=" . urlencode($company)
		. "&website=" . urlencode($company_url)
		. "&finished=" . urlencode('yes')
		. "&mark_for_deletion=" . urlencode('yes') //remove this before production
    . "&hs_context=" . urlencode($hs_context_json); //Leave this one be

//replace the values in this URL with your portal ID and your form GUID
$endpoint = 'https://forms.hubspot.com/uploads/form/v2/481308/f9977177-eb96-4d01-9445-9cd67c966d11';

$ch = @curl_init();
@curl_setopt($ch, CURLOPT_POST, true);
@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
@curl_setopt($ch, CURLOPT_URL, $endpoint);
@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded'
));
@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response    = @curl_exec($ch); //Log the response from HubSpot as needed.
$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
@curl_close($ch);
echo $status_code . " " . $response;
?>

<!DOCTYPE html>
<html>
<body>
<h1>Thank You!</h1>
</body>
</html>

