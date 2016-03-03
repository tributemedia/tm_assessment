<!DOCTYPE html>
<html>
  <head>
    <title>TM Assessment</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                <span class="one active">1</span><span class="two">2</span><span class="three">3</span>
              </div>
            </div>
          </div>
        </div>
          
        <div id="section-one" class="section">
          <div class="section-inner container">
            <div class="section-title"><h2>Let's Get Started</h2></div>
            
            <div class="row">
              <div class="col s12 m6">
                <div class="inner">
                  <p>Lorem ipsum dolor sit amet, ex laudem utamur perpetua per, accumsan pertinax id qui. Id vix dicat alterum splendide. Populo alterum omittam nec eu. Eum ad tritani laboramus, vis simul tollit prompta ad. Ne sit esse duis consetetur, vitae possim iuvaret no per.</p>
                </div>
              </div>
              
              <div class="col s12 m6">
                <div class="inner">
                  <form action="questions.php" method="post" name="info">
                    <div class="form-field">
						      		<span class="label">First Name:</span><input type="text" name="first_name" required />
						      	</div>
                    <div class="form-field"><span class="label">Last Name:</span>
						      		<input type="text" name="last_name" required />
						      	</div>
						      	<div class="form-field"><span class="label">Email:</span>
						      		<input type="email" name="email" required />
						      	</div>
                    <div class="form-field"><span class="label">Company:</span>
						      		<input type="text" name="company" required />
						      	</div>
                    <div class="form-field"><span class="label">Company URL:</span>
						      		<input type="text" name="company_url" required />
						      	</div>
                    <div class="button-wrapper">
 		  			      	  <button class="waves-effect waves-light btn-large" type="submit">Next</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
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