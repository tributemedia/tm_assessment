<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$company = $_POST['company'];
$company_url = $_POST['company_url'];
?>

<div id="assessment-wrapper">
   <div class="assessment-inner">
      
      <div class="assessment-title"><h1>Assessment</h1></div>
			
      <div id="section-two" class="section">
         <div class="section-inner">
            <div class="section-title"><h2>Section Two</h2></div>
						<form name="questions" action="results.php" method="post">
	            <div class="form-field"><input class="first-name" type="hidden" name="first_name" value=<?php echo '"' . $first_name . '"'; ?>></div>
	            <div class="form-field"><input class="last-name" type="hidden" name="last_name" value=<?php echo '"' . $last_name . '"'; ?>></div>
	            <div class="form-field"><input class="company" type="hidden" name="company" value=<?php echo '"' . $company . '"'; ?>></div>
	            <div class="form-field"><input class="company" type="hidden" name="company_url" value=<?php echo '"' . $company_url . '"'; ?>></div>
							<div id="q1"><span class="label">Question 1:</span><input type="text" name="q1"></div>
							<button class="button" type="submit">Next</button>
						</form>
         </div>
      </div><!-- #section-two .section -->
  </div>
</div>

<style>

.hidden {
	display: none;
}

.assessment-inner {
   width: 500px;
   padding: 15px;
   display: inline-block;
   background: #ccc;
}   

.assessment-title h1 {
   margin-top: 0;
}

.section {
   clear: both;
}

.section input,
.section select,   
.section .label {
   width: 50%;
   float: left;
   margin-bottom: 10px;
   display: block;
}

.section .form-field {
   width: 100%;
   float: left;
}

button {
   float: right;
   clear: both;
	 width: 50%;
}

</style>