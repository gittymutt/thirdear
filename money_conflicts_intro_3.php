<?php
session_start();
print_r($_POST);  

$_SESSION["identifyInterests"]= $_POST;



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Third Ear Programme App</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
  	<div class="panel panel-success">
        <div class="panel-heading panel-success">Money Conflicts: Step 3 - Play With the Possibilities</div>
  		<div class="panel-body">
  We get very significant about our money, don’t we? The fear of not having enough money is one of the issues most likely to trigger our deepest, most uncontrollable emotions or reflexes. Some say it triggers the amygdala—the part of our brain that controls our survival instincts. It’s where we choose to fight or flee. I’ve tried both of these options with my finances, and neither of them work very well. So, let’s instead have some fun with all of that gray area between fights and flights, or in your brain’s gray matter.    <br><br> 
            <button type="button" class="btn btn-success">Continue</button>
 		</div>
</div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    	$(document).ready( function () {     
		$(".btn").click( function () {
		var url = "money_conflicts_3.html";    
		$(location).attr('href',url);
		
		
		
		});
	
	
	});  
</script>

  </body>
</html>
