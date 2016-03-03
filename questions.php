<?php

$step1 = 'yes';
$step2 = 'no';
$finished = 'no';
$page_name = 'Assessment-Information';

include 'post-vars.php';
include 'questions-vars.php';
//include 'hs-submit.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>TM Assessment</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
              <div class="section-title"><h2>Section Two</h2></div>
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
          <div class="container">
            <div class="inner">
              <p>Vero iudico mei ei, vix oratio facilisi lobortis te.</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>		
  </body>
</html>