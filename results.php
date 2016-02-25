<?php

$step1 = 'yes';
$step2 = 'yes';
$finished = 'no';
$page_name = 'Assessment-Questions';

include 'post-vars.php';
include 'results-vars.php';
include 'calc.php';
//include 'hs-submit.php';

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
        
				<div>
				  <?php echo $results; ?>
				</div>
        <div id="section-three" class="section">
          <div class="section-inner">
            <div class="section-title"><h2>Section Three</h2></div>
            <form name="results" action="complete.php" method="post">
              <div class="form-field"><span class="label">First Name:</span> <input class="first-name" type="text" name="first_name" value=<?php echo '"' . $first_name . '"'; ?>></div>
              <div class="form-field"><span class="label">Last Name:</span> <input class="last-name" type="text" name="last_name" value=<?php echo '"' . $last_name . '"'; ?>></div>
							<div class="form-field"><span class="label">Email:</span> <input class="email" type="email" name="email" value=<?php echo '"' . $email . '"'; ?>></div>
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
