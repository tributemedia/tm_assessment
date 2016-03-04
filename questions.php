<?php

$step1 = 'yes';
$step2 = 'no';
$finished = 'no';
$page_name = 'Assessment-Information';
$page_url = 'http://assessment.tributemedia.com/info.php';

include 'post-vars.php';
include 'questions-vars.php';
include 'hs-submit.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>TM Assessment</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
		<script>
		  function show(id) {
        document.getElementById(id).className = "visible";
		    //document.getElementById(id).style.display = "inline-flex";
			 }
		  function hide(id) {
        document.getElementById(id).className = "hidden";
		    //document.getElementById(id).style.display = "none";
			}
		</script>
  </head>
  <body>
    
    <div id="assessment-wrapper">
      <div class="assessment-inner">
          
        <div id="header">  
          <div class="title-wrapper">
            <div class="main-title"><h1>Assessment</h1></div>
          </div>
          
          <div class="pager-wrapper">
            <div class="pager container">
              <div class="inner">
                <span class="one">1</span><span class="two active">2</span><span class="three">3</span>
              </div>
            </div>
          </div>
        </div>
	 		  
        <div id="section-two" class="section">
           <div class="section-inner container">
              <div class="section-title"><h2>We'd Like Your Opinion</h2></div>
	 		  			<form name="questions" action="results.php" method="post">
	              <div class="form-field">
									<input class="first-name" type="hidden" name="first_name" value=<?php echo '"'
									 . $first_name . '"'; ?>>
								</div>
	              <div class="form-field">
									<input class="last-name" type="hidden" name="last_name" value=<?php echo '"'
									 . $last_name . '"'; ?>>
								</div>
								<div class="form-field">
									<input class="email" type="hidden" name="email" value=<?php echo '"' . $email . '"'; ?>>
								</div>
	              <div class="form-field">
									<input class="company" type="hidden" name="company" value=<?php echo '"' . $company . '"'; ?>>
								</div>
	              <div class="form-field">
									<input class="company" type="hidden" name="company_url" value=<?php echo '"'
									 . $company_url . '"'; ?>>
								</div>
                
								<div data-role="main" class="ui-content">
									
                  <?php
									foreach ($questions as $key => $question) {
										$html = '<div class="assessment-question">';
										$html .= '<input type="hidden" name="q' . $key 
											. '-weight" value="' . $question['m'] . '>"';
										$html .= '<label for="q' . $key . '">Question ' . $key . ':</label>';
										$html .= '<p>' . $question['q'] . '<span class="tool-tip"
											onMouseOver="show(\'tip'.$key.'\')" onMouseOut="hide(\'tip'.$key.'\')">
											<i class="tiny material-icons">info</i>';
										$html .= '<span id="tip' . $key . '" class="hidden">' . $question['t'] . '</span></span></p>';
										$html .= '<input type="range" name="q' . $key . '" id="q' . $key . '" value="1" min="1" max="5" />';
										$html .= '<div class="numbers">';
										$html .= '<span class="one"><img src="css/images/1.png" /></span>
                      <span class="two"><img src="css/images/2.png" /></span>
										<span class="three"><img src="css/images/3.png" /></span>
											<span class="four"><img src="css/images/4.png" /></span>
											<span class="five"><img src="css/images/5.png" /></span>';
										$html .= '</div></div>';
										
										print $html;
									}
									?>
                  
								</div>
              
              <div class="button-wrapper">
	 		  			  <button class="waves-effect waves-light btn-large" type="submit">Next</button>
              </div>
	 		  		</form>
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
  </body>
</html>