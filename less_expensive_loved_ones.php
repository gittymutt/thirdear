<?php 
session_start();
$_SESSION['resolutionChoice'] = "that your loved-ones would accept less-expensive gifts, meals, etc";
$_SESSION['actionPlan'] = 
<<<END
-Each day, make a list of the ways you contributed to others during the day before.
-Each day, make a list of the ways others contributed to you and note what you appreciated most.
-List at least 10 things per day that you are thankful for.
-Review your personal or household budget for those expenses or purchases that you think you made because you had to, or for someone else’s benefit more than yours.
-Once you’ve identified the expenses at issue, list the benefits you got from each one.
-If you can, return purchases that you made on impulse and now regret.
-Make a list of 10 things you really like to spend your money on.
-Discuss your “10 things” list with at least three people who you trust, who know you well and who see you more powerful than you see yourself.
-Schedule time to use the Conflicts with Others Wizard for additional insight.
-If the issue comes up with a loved one, DO NOT discuss it while you are emotionally-charged. Tell your loved one that you aren’t sure you will make sense at the moment, and schedule a time to discuss your concerns.
-Follow through on any promises you make, and get clear on what you want to experience or share (versus the result you want to produce).


END


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
            I’m here with you on this one. I love that some of my friends and family members are doing well financially. I hope to be debt-free and more able to share my wealth in the near future, but I have difficulty standing my ground especially with certain people. Sometimes, I am embarrassed to admit that I still have crippling student loan debt and that I am not living the way lawyers do on TV. At other times, I feel like I have to buy approval by spending “like a real American consumer.” Intellectually, I know none of this matters to the people who truly enjoy our relationship and our time together, regardless of the amount of money I spend. Yet I’m still working my “no” muscle with a few people who seem to think I am only here to give to them. If you have people like this in your life, I encourage you to set aside some time this week to use the Conflicts with Others Wizard. In the meantime, let’s work on ourselves.
            <ol>
                <li>Each day, make a list of the ways you contributed to others during the day before.</li>
                <li>Each day, make a list of the ways others contributed to you and note what you appreciated most.</li>
                <li>List at least 10 things per day that you are thankful for.</li>
                <li>Review your personal or household budget for those expenses or purchases that you think you made because you had to, or for someone else’s benefit more than yours.</li>
                <li>Once you’ve identified the expenses at issue, list the benefits you got from each one.</li>
                <li>If you can, return purchases that you made on impulse and now regret.</li>
                <li>Make a list of 10 things you really like to spend your money on.</li>
                <li>Discuss your “10 things” list with at least three people who you trust, who know you well and who see you more powerful than you see yourself.</li>
                <li>Schedule time to use the Conflicts with Others Wizard for additional insight.</li>
                <li>If the issue comes up with a loved one, DO NOT discuss it while you are emotionally-charged. Tell your loved one that you aren’t sure you will make sense at the moment, and schedule a time to discuss your concerns.</li>
                <li>Follow through on any promises you make, and get clear on what you want to experience or share (versus the result you want to produce).</li>
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
