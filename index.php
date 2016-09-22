<?php
#error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
#ini_set('display_errors', 1); # Display errors on page (instead of a log file)

?>

<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Project 2</title>
  
  <!-- you can choose another font-family, and even have as many as you design requires. -->
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  
  <!-- external css stylesheets  -->
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link href="index.css" rel="stylesheet" type="text/css">
  <!-- Universal selector:  means all character data will take on the Raleway font-family look -->
  <style>
   
  </style>
 
  <script type="text/javascript">
    function yesnoCheck() {
      if (document.getElementById('yesCheck').checked) {
          document.getElementById('ifYes').style.display = 'block';
      } else {
          document.getElementById('ifYes').style.display = 'none';
      }
    }
  </script>
 </head>
<body>
	<div id="container">


		<div id="main"> <!-- Begin main section -->		

    <div id="password"> <!-- Begin password -->  
        <?php 
        require("logic.php");
        if (isset($_POST["submit-button"])) {
          echo get_password( $_POST["words"], is_checked("number"),is_checked("symbol"), is_checked("numbers"), is_checked("cases"));
        }
        else 
        {
          echo get_password(4, "false", "false"); 
        }
        ?>
     </div><br> <!--end password -->

     <form class="pure-form" action="" method="post"> <!-- Begin main form -->
        <fieldset>
          <legend>Generate an XKCD-style password!</legend>
              How many words? (1 through 9) 
              <input name="words" type="number" value="4" min="1" max="9">
              <br>
              <input name="symbol" type="checkbox"> Add a symbol 
              <br>
              <input id="yesCheck" name="number" type="checkbox" onchange="javascript:yesnoCheck();"> Add a number 
              <div id="ifYes" style="display:none">
                How many numbers? <input name="numbers" value="1" min="1" max="9">
              </div>
              <br>
              <input name="cases" type="radio" value="camel"> camelCase? 
              <input name="cases" type="radio" value="caps"> ALL CAPS? 
              <input name="cases" type="radio" value="lower" > lower cased?  
              <input name="cases" type="radio" value="plain" checked> Don't care!  
              <br>
              <button name="submit-button" type="submit" class="pure-button pure-button-primary">Submit</button>
        </fieldset>
      </form><!-- End main form --> 

        
		</div> <!-- End main section -->		
	</div> <!-- End container main section -->		

</body>
</html>

