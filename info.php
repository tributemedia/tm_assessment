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
            <span class="one active">1</span><span class="two">2</span><span class="three">3</span>
          </div>
        </div>
          
        <div id="section-one" class="section">
          <div class="section-inner">
            <div class="section-title"><h2>Let's Get Started</h2></div>
            <form action="results.php" method="post" name="info">
              <div class="form-field"><span class="label">First Name:</span> <input type="text" name="first_name"></div>
              <div class="form-field"><span class="label">Last Name:</span> <input type="text" name="last_name"></div>
              <div class="form-field"><span class="label">Company:</span> <input type="text" name="company"></div>
              <div class="form-field"><span class="label">Company URL:</span> <input type="text" name="company_url"></div>
              <div class="button-wrapper">
 		  				  <button class="waves-effect waves-light btn-large" type="submit">Next</button>
              </div>
            </form>
    			</div>
        </div><!-- #section-one .section -->
    	</div>
    </div>
  
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <script type="text/javascript" src="js/nouislider.js"></script>
    <script type="text/javascript" src="js/slidercontroller.js"></script>
  </body>
</html> 