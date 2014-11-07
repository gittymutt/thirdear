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
        <div class="panel-heading panel-success">Step One: Define the Conflict.</div>
       	<div class="panel-body">
        I don't have enough money to...
        <br><br>

            <form action="money_conflicts_intro_2.php" method="post">
                <label><input type="checkbox" name="notEnoughMoneyTo[]" value="pay your basic living expenses">  
                     Pay my basic living expenses.</label>
                <br>

                <label><input type="checkbox" name="notEnoughMoneyTo[]" value="create an emergency savings account"> 
                     Create an emergency savings account.</label>
                <br>

                <label><input type="checkbox" name="notEnoughMoneyTo[]" value="fix your car or things around your home"> 
                     Fix my car or things around my home.</label>
                <br>

                <label><input type="checkbox" name="notEnoughMoneyTo[]" value="buy health insurance"> 
                     Buy health insurance.</label>
                <br>
                    
                <label><input type="checkbox" name="notEnoughMoneyTo[]" value="save for retirement"> 
                     Save for retirement.</label>
                <br>

                <label><input type="checkbox" name="notEnoughMoneyTo[]" value="send your kids to college"> 
                     Send my kids to college.</label>
                <br>

                <label><input type="checkbox" name="notEnoughMoneyTo[]" value="take a vacation or have some fun"> 
                     Take a vacation or have some fun.</label>
                <br>

                <br>
                <input type="submit" class="btn btn-success">
            </form>
        </div>
        </div>
        </div>
     </div>
  </body>
</html>
