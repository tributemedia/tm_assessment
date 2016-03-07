<?php

$step1 = 'yes';
$step2 = 'yes';
$finished = 'no';
$page_name = 'Assessment-Questions';
$page_url = 'http://assessment.tributemedia.com/questions.php';

include 'post-vars.php';
include 'results-vars.php';
include 'calc.php';
include 'hs-submit.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tribute Media - Digital Marketing Self Assessment</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div id="assessment-wrapper">
      <div class="assessment-inner">
            
        <div id="header">  
          <div class="title-wrapper">
            <div class="main-title"><h1>Your Results</h1></div>
          </div>
          
          <div class="pager-wrapper">
            <div class="pager container">
              <div class="inner">
                <span class="one">1</span><span class="two">2</span><span class="three active">3</span>
              </div>
            </div>
          </div>
        </div>
        
        <div id="section-three" class="section">
          <div class="section-inner container">
            <div class="section-title"><?php echo $results; ?></div>
            
            <div class="row">
              <div class="col s12 m6 section-text">
                <div class="inner">
                  <div><?php echo $results_body; ?></div>
                </div>
              </div>
              
              <div class="col s12 m6">
                <div class="inner">
                  
                  <p><?php echo $first_name . ", "; ?>thanks for taking our assessment. 
                    There is more to this world than just an assessment. We can help you do more. Let us know below how we can help you.</p>
                  
                  <form name="results" action="complete.php" method="post">
                    <div class="form-field">
						  				<input class="first-name" type="hidden" name="first_name" 
						  				value=<?php echo '"' . $first_name . '"'; ?>>
						  			</div>
                    <div class="form-field">
						  				<input class="last-name" type="hidden" name="last_name" 
						  				value=<?php echo '"' . $last_name . '"'; ?>>
						  			</div>
						      	<div class="form-field">
						  				<input class="email" type="hidden" name="email" 
											value=<?php echo '"' . $email . '"'; ?>>
						  			</div>
                    <div class="form-field">
						  				<input class="company" type="hidden" name="company" 
											value=<?php echo '"' . $company . '"'; ?>>
						  			</div>
                    <div class="form-field">
						  				<input class="company" type="hidden" name="company_url" 
						  				value=<?php echo '"' . $company_url . '"'; ?>>
						  			</div>
						  			<div class="input-field">
						  			  <select name="persona">
						  			    <option value="" disabled selected>Choose your option</option>
												<?php 
												foreach ($personas as $key => $persona) {
													echo '<option value="' . $key . '">' . $persona . '</option>';
												}
												?>
						  			  </select>
						  			  <label>Which statement fits you best?</label>
						  			</div>
						  			<div class="input-field">
						  			  <select name="budget">
						  			    <option value="" disabled selected>Choose your option</option>
						  			    <option value="Less than $15,000 annually">Less than $15,000 annually</option>
						  			    <option value="$15,000 to $30,000 annually">$15,000 to $30,000 annually</option>
						  			    <option value="$30,000 to $50,000 annually">$30,000 to $50,000 annually</option>
                        <option value="$50,000 to $100,000 annually">$50,000 to $100,000 annually</option>
                        <option value="Greater than $100,000 annually">Greater than $100,000 annually</option>
						  			  </select>
						  			  <label>What is your total annual marketing &amp; advertising budget?</label>
						  			</div>
										<p>
											<input type="checkbox" id="call" name="call" />
											<label for="call">Yes I want to meet for a more in-depth personalized audit of my web marketing.</label>
										</p>
										<p>
											<input type="checkbox" id="tuesday-tips" name="tuesday-tips" />
											<label for="tuesday-tips">Please add me to your weekly tips email.</label>
										</p>
										<p>
											<input type="checkbox" id="events" name="events" />
											<label for="events">Please email me when you have events, trainings and workshops.</label>
										</p>
                    <div class="button-wrapper">
 		  			      	  <button class="waves-effect waves-light btn-large" type="submit">Finalize Your Assessment</button>
                    </div>
                  </form>
                  
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
        <div id="footer">
          <div id="attribution-line" class="attribution-wrapper wrapper">
            <div id="attribution-container" class="container">
              <div class="inner row">
                <div id="copyright-line" class="col s12 m6 center-on-mobile">
                  <div class="inner">
                    &copy; <?php echo date("Y"); ?> Tribute Media || 208.489.0123 <br /> 136 E. Idaho Ave. Ste. 100, Meridian, ID 83642
                  </div>
                </div>
                <div id="powered-by" class="col s12 m6 right-align center-on-mobile">
                  <div class="inner">
                   <ul class="right-align center-on-mobile" id="social-links">
                     <li><a class="twitter" href="https://twitter.com/tributemedia" target="_blank"><span class="inner">Twitter</span></a></li>
                     <li><a class="facebook" href="https://www.facebook.com/tributemediaboise" target="_blank"><span class="inner">Facebook</span></a></li>
                     <li><a class="linkedin" href="https://www.linkedin.com/company/tribute-media" target="_blank"><span class="inner">LinkedIn</span></a></li>
                     <li><a class="contact" href="/contact"><span class="inner"><span class="inner">Contact</span></span></a></li>
                   </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         
      </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
		  $(document).ready(function() {
		  	$('select').material_select();
		  });
		</script>
  </body>
</html> 
