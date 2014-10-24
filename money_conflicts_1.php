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
        <div class="panel-heading panel-success">Money Conflicts: Step 1 - Define the Conflict.</div>
  		<div class="panel-body">
            I don't have enough money to...
    		<div class="checkbox">
  				<label>
    				<input type="checkbox" value="">
    					Pay my basic living expenses. 
  				</label>
  			<br>
  				<label>
    				<input type="checkbox" value="">
    				Create an emergency savings account.
  				</label>
  			<br>
  				<label>
    				<input type="checkbox" value="">
    					Fix my car or things around my home
                    </label>
           	<br>
  				<label>
    				<input type="checkbox" value="">
    					Buy health insurance
                    </label>
          	<br>
  				<label>
    				<input type="checkbox" value="">
    					 Save for retirement
                </label>          	
            <br>
  				<label>
    				<input type="checkbox" value="">
    				Send my kids to college
                </label>
          	<br>
  				<label>
    				<input type="checkbox" value="">
    				Take a vacation or have some fun
                </label>
          	<br>
  				<label>
    				<input type="checkbox" value="">
                    Other: 
                
                </label>



			</div>
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
		var url = "money_conflicts_intro_2.php";    
		$(location).attr('href',url);
		
		
		
		});
	
	
	});  
</script>

  </body>
</html>
