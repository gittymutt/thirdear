<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

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
	  		<div class="panel-heading panel-success">Money Conflicts: Step 2 - Identify Your Interests.</div>
  				<div class="panel-body">
    				<form class="form-horizontal" role="form">
    			<div class="form-group">
                    <h3>Fill in the blanks with what comes to mind:</h3>
    				<label for="inputEmail3" class="col-sm-2 control-label">I want</label>
    					<div class="col-sm-10">
      					<input type="email" class="form-control" id="inputEmail3" placeholder="(What do you want?)">
    					</div>
    				</label>
    				<label for="inputEmail3" class="col-sm-2 control-label">I thought</label>
    					<div class="col-sm-10">
      					<input type="email" class="form-control" id="inputEmail3" placeholder="(What did you think?)">
    					</div>
    				</label>
    				<label for="inputEmail3" class="col-sm-2 control-label">I believed</label>
    					<div class="col-sm-10">
      					<input type="email" class="form-control" id="inputEmail3" placeholder="(What did you believe?)">
    					</div>
    				</label>
    				<label for="inputEmail3" class="col-sm-2 control-label">I expected</label>
    					<div class="col-sm-10">
      					<input type="email" class="form-control" id="inputEmail3" placeholder="(What did you expect?)">
    					</div>
    				</label>
    				<label for="inputEmail3" class="col-sm-2 control-label">I wish</label>
    					<div class="col-sm-10">
      					<input type="email" class="form-control" id="inputEmail3" placeholder="(What do you wish?)">
    					</div>
    				</label>
    				<label for="inputEmail3" class="col-sm-2 control-label">I have to</label>
    					<div class="col-sm-10">
      					<input type="email" class="form-control" id="inputEmail3" placeholder="(What do you have to do?)">
    					</div>
    				</label>


    			</div>
    				</form>
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
		var url = "money_conflicts_intro_3.html";    
		$(location).attr('href',url);
		
		
		
		});
	
	
	});  
</script>

  </body>
</html>

