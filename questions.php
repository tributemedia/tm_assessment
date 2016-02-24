<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$company = $_POST['company'];
$company_url = $_POST['company_url'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>TM Assessment</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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
	              <div class="form-field"><input class="company" type="hidden" name="company" value=<?php echo '"' . $company . '"'; ?>></div>
	              <div class="form-field"><input class="company" type="hidden" name="company_url" value=<?php echo '"' . $company_url . '"'; ?>></div>
                
								<div data-role="main" class="ui-content">
								  <label for="q1">Question 1:</label>
									<p>How do you like our new assessment?</p>
								  <input type="range" name="q1" id="q1" value="0" min="0" max="5" data-highlight="true" data-show-value="true" />
									<p>0 is not cool, and 5 is most cool</p>
									<hr />
									<label for="q2">Question 2:</label>
									<p>How do you like our old assessment?</p>
									<input type="range" name="q2" id="q2" value="0" min="0" max="5" data-highlight="true" data-show-value="true" />
									<p>0 is not cool, and 5 is most cool</p>
								</div>
              
              <div class="button-wrapper">
	 		  			  <button class="waves-effect waves-light btn-large" type="submit">Next</button>
              </div>
	 		  		</form>
          </div>
        </div><!-- #section-two .section -->
      </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
		
    <script type="text/javascript" src="js/nouislider.js"></script>
		
  </body>
</html>