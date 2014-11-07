<?php 
session_start();
$_SESSION['resolutionChoice'] = "to get a higher-paying job";
$_SESSION['actionPlan'] = 
<<<END
-Give 100% effort in your current job, including if your current job is to find a job.
-Take an inventory of what you do best and what makes you happiest.
-Review your personal or household budget for unnecessary expenses you could cut.
-Build up an emergency fund or savings account, so your job choices aren’t based solely on money desperation.
-Write a resume for the ideal candidate (you) in your dream job and determine where you might need to build some skills.
-Volunteer in a not-for-profit organization that will allow you to practice the skills you want to master.<br>
-Accept an additional part-time job in a for-profit business that will allow you to practice the skills you want to master.
NOTE: For-profit businesses are probably violating Wage and Labor Laws if they offer to “hire” you as a volunteer. DO NOT work for anyone who refuses to at least pay you minimum wage for your services, even if they have to train you.
-Talk to your loved ones about your plans to leave your current job.
-Ask your loved ones how it will affect them and what concerns they have about a change.
-Listen fully to your loved ones and design a plan to minimze the risks they fear most.
-Search for a career counselor/coach or attend a job search event within your budget.
-Ask your current employer for extra work in an area you want to develop.
-Make a list of no less than 10 things you love about your current job.
-Discuss your “10 things” list with at least three people who you trust, who know you well and who see you more powerful than you see yourself.
END;
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
	  		<div class="panel-heading panel-success">Step Four: Create the Future</div>
  		<div class="panel-body">
            I often listen to Jon Acuff’s <a href="http://www.amazon.com/Quitter-Closing-Between-Your-Dream/dp/0982986270">Quitter audiobook</a> while running or working out. It’s full of great tips for finding a job you enjoy more than your current one, and I’ve added some tips of my own below. Choose three actions from these, or create your own and get in action this week. You won’t get where you want to go by standing in place!
            
            <ol>
                <li>Give 100% effort in your current job, including if your current job is to find a job.</li>
                <li>Take an inventory of what you do best and what makes you happiest.</li>
                <li>Review your personal or household budget for unnecessary expenses you could cut.</li>
                <li>Build up an emergency fund or savings account, so your job choices aren’t based solely on money desperation.</li>
                <li>Write a resume for the ideal candidate (you) in your dream job and determine where you might need to build some skills.</li>
                <li>Volunteer in a not-for-profit organization that will allow you to practice the skills you want to master.</li>
                <li>Accept an additional part-time job in a for-profit business that will allow you to practice the skills you want to master.</li>
 
<div style="color: red;">NOTE: For-profit businesses are probably violating Wage and Labor Laws if they offer to “hire” you as a volunteer. DO NOT work for anyone who refuses to at least pay you minimum wage for your services, even if they have to train you.</div>
 
                <li>Talk to your loved ones about your plans to leave your current job.</li>
                <li>Ask your loved ones how it will affect them and what concerns they have about a change.</li>
                <li>Listen fully to your loved ones and design a plan to minimze the risks they fear most.</li>
                <li>Search for a career counselor/coach or attend a job search event within your budget.</li>
                <li>Ask your current employer for extra work in an area you want to develop.</li>
                <li>Make a list of no less than 10 things you love about your current job.</li>
                <li>Discuss your “10 things” list with at least three people who you trust, who know you well and who see you more powerful than you see yourself.</li>
 		    <ol>
                <br>
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
		var url = "money_conflicts_5.php";    
		$(location).attr('href',url);
		
		
		
		});
	
	
	});  
</script>

  </body>
</html>
