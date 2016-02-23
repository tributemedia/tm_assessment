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
    <link rel="stylesheet" href="css/nouislider.tooltips.css">
    <link rel="stylesheet" href="css/nouislider.pips.css">
    <link rel="stylesheet" href="css/nouislider.css">
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
                
	 		  				<div id="q1"><span class="label">Question 1:</span><input type="text" name="q1"></div>
                
                <div id="slider-update" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  <div class="noUi-base">
                    <div class="noUi-origin" style="left: 0%;">
                      <div class="noUi-handle noUi-handle-lower"></div>
                    </div>
                  </div>
                </div>
                <span id="slider-update-value" class="example-val">0.00</span>
                
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
    <script type="text/javascript" src="js/slidercontroller.js"></script>
  </body>
</html> 

