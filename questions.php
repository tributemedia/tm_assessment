<?php

$step1 = $_POST['front'];
$step2 = 'no';
$finished = 'no';
$page_name = 'Assessment-Information';
$page_url = 'http://assessment.tributemedia.com/tm_assessment/info.php';

if ($step1 != 'yes') {
  header('Location: ' . $page_url);
  exit;
}
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
		  }
		  function hide(id) {
        document.getElementById(id).className = "hidden";
		  }
		</script>
  </head>
  <body>
    <div id="assessment-wrapper">
      <div class="assessment-inner">
          
        <div id="header">  
          <div class="title-wrapper">
            <div class="main-title"><h1>Tribute Media - Digital Marketing Self Assessment</h1></div>
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
              <div class="section-title"><h2>Please answer these 15 questions</h2><p>Each question has a little icon (<i class="tiny material-icons">info</i>) next to it that will provide more detail. For example, multiple choices questions have the multiple options in the fancy little tool tip. Your biggest challenge is trying to put yourself in your clients' shoes. Do your best to think like an outsider.  Take your time and be brutally honest with yourself, your entire marketing world is riding on your answers.</p></div>
	 		  			<form name="questions" action="results.php" method="post">
                <div class="form-field">
                  <input type="hidden" name="second" value="yes" />
                </div>
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
										$html = '<div class="assessment-question ' . 'assessment-question-' . $key .'">';
										$html .= '<input type="hidden" name="q' . $key 
											. '-weight" value="' . $question['m'] . '>"';
										$html .= '<label for="q' . $key . '">Question ' . $key . ':</label>';
										$html .= '<p>' . $question['q'] . '<span class="tool-tip"
											onMouseOver="show(\'tip'.$key.'\')" onMouseOut="hide(\'tip'.$key.'\')">
											<i class="tiny material-icons">info</i>';
										$html .= '<span id="tip' . $key . '" class="hidden">' . $question['t'] . '</span></span></p>';
										$html .= '<input type="range" name="q' . $key . '" id="q' . $key . '" value="1" min="1" max="5" />';
										$html .= '<div class="numbers">';
										$html .= '<span class="one"><span class="icon"></span></span>
                      <span class="two"><span class="icon"></span></span>
										<span class="three"><span class="icon"></span></span>
											<span class="four"><span class="icon"></span></span>
											<span class="five"><span class="icon"></span></span>';
										$html .= '</div></div>';
										
										print $html;
									}
									?>
                  
								</div>
              
              <div class="button-wrapper">
	 		  			  <button class="waves-effect waves-light btn-large" type="submit">See Your Results</button>
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
                    <div class="back-to-home"><a href="http://www.tributemedia.com">BACK TO HOME</a></div>
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
    <!-- Start of Async HubSpot Analytics Code -->
    <script type="text/javascript">
      (function(d,s,i,r) {
        if (d.getElementById(i)){return;}
        var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
        n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/481308.js';
        e.parentNode.insertBefore(n, e);
      })(document,"script","hs-analytics",300000);
    </script>
    <!-- End of Async HubSpot Analytics Code -->		
  </body>
</html>