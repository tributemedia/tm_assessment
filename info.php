<div id="assessment-wrapper">
  <div class="assessment-inner">
      
    <div class="assessment-title"><h1>Assessment</h1></div>
      
    <div id="section-one" class="section">
      <div class="section-inner">
        <div class="section-title"><h2>Section One</h2></div>
        <form action="questions.php" method="post" name="info">
          <div class="form-field"><span class="label">First Name:</span> <input type="text" name="first_name"></div>
          <div class="form-field"><span class="label">Last Name:</span> <input type="text" name="last_name"></div>
          <div class="form-field"><span class="label">Company:</span> <input type="text" name="company"></div>
          <div class="form-field"><span class="label">Company URL:</span> <input type="text" name="company_url"></div>
          <button class="button" type="submit">Next</button>
        </form>
			</div>
    </div><!-- #section-one .section -->
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