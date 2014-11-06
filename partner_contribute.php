<?php 
session_start();
$_SESSION['resolutionChoice'] = "that your partner would contribute more financially";
$_SESSION['actionPlan'] = 
<<<END
-Read Spousenomics by Paula Szuchman and Jenny Anderson to get some insight on the many potential balances in relationships.
-Review your personal or household budget for unnecessary expenses, impulse purchases, shortfalls, and real numbers to support or challenge your beliefs.
-Make a list of no less than 10 things you love about your partner.
-Make a list of all of the times you have had similar complaints about other partners, roommates, family members, friends, co-workers, etc.
-Discuss your “10 things” list with at least three people who you trust, who know you well and who see you more powerful than you see yourself.
-Schedule time to use the Conflicts with Others Wizard for additional insight.
-If the issue comes up with your partner, DO NOT discuss it while you are emotionally-charged. Tell your partner that you aren’t sure you will make sense at the moment, and schedule a time to discuss your concerns.
-Follow through on any promises you make, and get clear on what you want to experience or share (versus the result you want to produce).
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
	  		<div class="panel-heading panel-success">Money Conflicts: Step 4 - Create the Future.</div>
  		<div class="panel-body">
Ouch. It hurts when someone you identify as your partner doesn’t seem to be contributing as much as you feel you are. This part of your money conflict is no longer just about you. I encourage you to set aside some time this week to use the Conflicts with Others Wizard for that. In the meantime, let’s set you up with an action plan to get behind the imbalance you are feeling.
            <ol>
                <li>  Read <a href="http://www.amazon.com/Its-Dishes-originally-published-Spousonomics/dp/0385343957">Spousenomics</a> by Paula Szuchman and Jenny Anderson to get some insight on the many potential balances in relationships.</li>
                <li>Review your personal or household budget for unnecessary expenses, impulse purchases, shortfalls, and real numbers to support or challenge your beliefs.</li>
                <li>Make a list of no less than 10 things you love about your partner.</li>
                <li>Make a list of all of the times you have had similar complaints about other partners, roommates, family members, friends, co-workers, etc.</li>
                <li>Discuss your “10 things” list with at least three people who you trust, who know you well and who see you more powerful than you see yourself.</li>
                <li>Schedule time to use the Conflicts with Others Wizard for additional insight.</li>
                <li>If the issue comes up with your partner, DO NOT discuss it while you are emotionally-charged. Tell your partner that you aren’t sure you will make sense at the moment, and schedule a time to discuss your concerns.</li>
                <li>Follow through on any promises you make, and get clear on what you want to experience or share (versus the result you want to produce).</li>
            </ol>
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
