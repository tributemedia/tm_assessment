<?php
// Process a new form submission in HubSpot in order to create a new Contact.

$hubspotutk = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
$ip_addr = $_SERVER['REMOTE_ADDR']; //IP address too.
$hs_context = array(
  'hutk' => $hubspotutk,
  'ipAddress' => $ip_addr,
  'pageUrl' => $page_url,
  'pageName' => $page_name
);
$hs_context_json = json_encode($hs_context);

// Need to populate these varilables with values from the form.
$str_post = "firstname=" . urlencode($first_name)
  . "&lastname=" . urlencode($last_name)
  . "&email=" . urlencode($email)
  . "&company=" . urlencode($company)
  . "&website=" . urlencode($company_url)
  . "&completed_step_1=" . urlencode($step1)
  . "&completed_step_2=" . urlencode($step2)
  . "&finished=" . urlencode($finished)
  . "&hs_persona=" . urlencode($persona)
  . "&marketing_budget=" . urlencode($budget)
  . "&tuesday_tips_signup=" . urlencode($tuesday_tips)
  . "&request_event_notifications=" . urlencode($events)
  . "&request_call=" . urlencode($call)
  . "&phone=" . urlencode($phone)
  . "&hs_context=" . urlencode($hs_context_json); //Leave this one be

// replace the values in this URL with your portal ID and your form GUID
// https://forms.hubspot.com/uploads/form/v2/[portal ID]/[form GUID]
$endpoint = 'https://forms.hubspot.com/uploads/form/v2/481308/0d441326-8841-4903-97a4-425f6875e6d6';

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
//echo $status_code . " " . $response;
?>