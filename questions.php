<?php
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
    'pageUrl' => 'http://assessment.tributemedia.com/info.php',
    'pageName' => 'Assessment-Information'
);
$hs_context_json = json_encode($hs_context);

//Need to populate these varilables with values from the form.
$str_post = "firstname=" . urlencode($first_name)
    . "&lastname=" . urlencode($last_name)
    . "&email=" . urlencode($email)
		. "&company=" . urlencode($company)
		. "&website=" . urlencode($company_url)
		. "&completed_step_1=" . urlencode('yes')
		. "&mark_for_deletion=" . urlencode('yes') //remove this before production
    . "&hs_context==" . urlencode($hs_context_json); //Leave this one be

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
            <span class="one">1</span><span class="two active">2</span><span class="three">3</span>
          </div>
        </div>
	 		  
        <div id="section-two" class="section">
           <div class="section-inner">
              <div class="section-title"><h2>Section Two</h2></div>
	 		  			<form name="questions" action="results.php" method="post">
	              <div class="form-field"><input class="first-name" type="hidden" name="first_name" value=<?php echo '"' . $first_name . '"'; ?>></div>
	              <div class="form-field"><input class="last-name" type="hidden" name="last_name" value=<?php echo '"' . $last_name . '"'; ?>></div>
								<div class="form-field"><input class="email" type="hidden" name="email" value=<?php echo '"' . $email . '"'; ?>></div>
	              <div class="form-field"><input class="company" type="hidden" name="company" value=<?php echo '"' . $company . '"'; ?>></div>
	              <div class="form-field"><input class="company" type="hidden" name="company_url" value=<?php echo '"' . $company_url . '"'; ?>></div>
                
								<div data-role="main" class="ui-content">
                  
                  <div class="assessment-question">
								    <label for="q1">Question 1:</label>
									  <p>How do you like our new assessment?</p>
                    <p><small>0 is not cool, and 5 is most cool</small></p>
								    <input type="range" name="q1" id="q1" value="0" min="0" max="5" data-highlight="true" data-show-value="true" />
                    <div class="numbers"><span class="zero">0</span><span class="one">1</span><span class="two">2</span><span class="three">3</span><span class="four">4</span><span class="five">5</span></div>
                  </div>
									
                  <div class="assessment-question">
									  <label for="q2">Question 2:</label>
									  <p>How do you like our old assessment?</p>
                    <p><small>0 is not cool, and 5 is most cool</small></p>
									  <input type="range" name="q2" id="q2" value="0" min="0" max="5" data-highlight="true" data-show-value="true" />
                    <div class="numbers"><span class="zero">0</span><span class="one">1</span><span class="two">2</span><span class="three">3</span><span class="four">4</span><span class="five">5</span></div>
                  </div>
                  
								</div>
              
              <div class="button-wrapper">
	 		  			  <button class="waves-effect waves-light btn-large" type="submit">Next</button>
              </div>
	 		  		</form>
          </div>
        </div><!-- #section-two .section -->
      </div>
    </div>
    
		<!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
		<!-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>		
  </body>
</html>