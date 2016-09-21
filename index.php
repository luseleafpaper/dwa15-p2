

<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Project 2</title>
  
  <!-- You may or not not use jQuery; but, here just to show as example -->
  <script src="http://code.jquery.com/jquery-2.1.3.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script> 
  
  <!-- you can choose another font-family, and even have as many as you design requires. -->
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet" type="text/css">
  
  <!-- external css stylesheets  -->
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link href="index.css" rel="stylesheet" type="text/css">
  <!-- Universal selector:  means all character data will take on the Raleway font-family look -->
  <style>
    
  </style>
 
 </head>
<body>
	<div id="container">


		<div id="main"> <!-- Begin main section -->		
        <form class="pure-form pure-form-aligned" action="" method="post"> <!-- Begin main form -->
        <fieldset>
            <div class="pure-control-group">
                <label for="name">Name</label>
                <input name="name" type="text" placeholder="Lu">
            </div>
            <div class="pure-control-group">
                <label for="words">Number of words (max 9)</label>
                <input name="words" type="number" placeholder="4" min="1" max="9">
            </div>
            <div class="pure-controls">
                <label for="number" class="pure-checkbox">
                <input name="number" type="checkbox"> Add a number 
                </label>
            </div>
            <div class="pure-controls">
                <label for="symbol" class="pure-checkbox">
                <input name="symbol" type="checkbox"> Add a symbol 
                </label>
                <button name="submit-button" type="submit" class="pure-button pure-button-primary">Submit</button>
            </div>
        </fieldset>
    </form><!-- End main form --> 
        
		</div> <!-- End main section -->		
	</div> <!-- End container main section -->		

<?php if (isset($_POST["submit-button"])) {
  echo "Welcome ".$_POST["name"]."<br>"; 
  if ($_POST["number"]=="on") echo "You've also requested a number <br>";
  if ($_POST["symbol"]=="on") echo "You've also requested a symbol <br>"; 
}
?>

</body>
</html>

