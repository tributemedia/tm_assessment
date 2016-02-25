<?php

   // initiate variables from $_POST

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$company = $_POST['company'];
$company_url = $_POST['company_url'];
$email = 'skenley@tributemedia.com';

   //Process a new form submission in HubSpot in order to create a new Contact.

$hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
$ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
$hs_context      = array(
    'hutk' => $hubspotutk,
    'ipAddress' => $ip_addr,
    'pageUrl' => 'http://assessment.tributemedia.com/results.php',
    'pageName' => 'Assessment'
);
$hs_context_json = json_encode($hs_context);

//Need to populate these varilables with values from the form.
$str_post = "firstname=" . urlencode($first_name) 
    . "&lastname=" . urlencode($last_name) 
    . "&email=" . urlencode($email) 
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
  <head>
    <title>TM Assessment</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div id="assessment-wrapper">
      <div class="assessment-inner">
            
        <div class="main-title"><h1>Assessment</h1></div>
        
        <div class="pager">
          <div class="inner">
            <span class="one">1</span><span class="two">2</span><span class="three active">3</span>
          </div>
        </div>
              
        <div id="section-three" class="section">
          <div class="section-inner">
            <div class="section-title"><h2>Section Three</h2></div>
            <form name="results" action="" method="post">
              <div class="form-field"><span class="label">First Name:</span> <input class="first-name" type="text" name="first_name" value=<?php echo '"' . $first_name . '"'; ?>></div>
              <div class="form-field"><span class="label">Last Name:</span> <input class="last-name" type="text" name="last_name" value=<?php echo '"' . $last_name . '"'; ?>></div>
              <div class="form-field"><span class="label">Company:</span> <input class="company" type="text" name="company" value=<?php echo '"' . $company . '"'; ?>></div>
              <div class="form-field"><span class="label">Company URL:</span> <input class="company" type="text" name="company_url" value=<?php echo '"' . $company_url . '"'; ?>></div>
              <div class="form-field"><span class="label">Total Annual Marketing &amp; Advertising Budget: </span><select name="persona">
                <option value="#">Volvo</option>
                <option value="#">Saab</option>
                <option value="#">Fiat</option>
                <option value="#">Audi</option>
              </select></div>
               <div class="form-field"><span class="label">Total Annual Marketing &amp; Advertising Budget: </span>
              <select name="budget">
                <option value="less_than_15">Less than $15,000 annually</option>
                <option value="15_to_30">$15,000 to $30,000 annually</option>
                <option value="30_to_50">$30,000 to $50,000 annually</option>
                <option value="50_to_100">$50,000 to $1000,000 annually</option>
                <option value="greater_than_100">Greater than $100,000 annually</option>
              </select></div>
              <div class="button-wrapper">
 		  				  <button class="waves-effect waves-light btn-large" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div><!-- #section-three .section -->
         
      </div><!-- .assessment-inner -->
    </div><!-- #assessment-wrapper -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html> 
