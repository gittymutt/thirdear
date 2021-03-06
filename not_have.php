<?php 
session_start();
$_SESSION['resolutionChoice'] = "that you wouldn't have something you don't want";
$_SESSION['actionPlan'] = 
<<<END
-Determine the exact amount that you “have to” pay to meet this obligation you wish you didn’t have.
-Disclose the exact amount of this financial obligation with at least one person who you trust, who knows you well and who sees you more powerful than you see yourself.
-Make a list of all of the times you have had similar complaints about other obligations.
-Make a list of 10 things that you love to do and would do for free.
-Discuss your “10 things” list with at least three people who you trust, who know you well and who see you more powerful than you see yourself.
-Brainstorm five to 10 ways you can generate income to pay toward this obligation.
--Can you take a second or very part-time job?
--Can you find freelance assignments or odd jobs, such as on TaskRabbit?
--Can you have a yard, estate or other sale?
--Can you ask friends or family for a gift or loan?
--Can you take in a roommate? Or become one?
-Brainstorm five to 10 ways you could eliminate this obligation.
--Can you sell it or transfer ownership?
--Can you lease it part-time, such as on airbnb?
--Can you return it?
--Can you ask for loan forgiveness, reduction or other help?
-Add to your action plan some of the actions you brainstormed.
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
            It doesn’t always feel like it, but do you realize that you never technically have to do anything? This is not to say that your choice not to do something won’t cause a consequence you don’t like—or an unexpected one that you do and didn’t know was possible. It’s just very important for you to see that you are constantly making choices and most of them are very powerful. Some of them are like the ones you made as a child, but you make them differently now. You hated broccoli and Brussels sprouts before, but now you eat them because you’ve learned to cook them in new ways and you like the way your body feels when it’s properly nourished. You still choose ice cream for dinner sometimes. You just choose not to have the sugar crash, bloat and sluggishness that you can’t run off as easily as you did at five years old. You have too much you want to accomplish to at this stage of you life, so you opt for food that energizes you throughout the day. Hmmm. How is it that someone so powerful ended up with a financial obligation that weighs so heavily? Let’s take a look so you don’t repeat this cycle—and so that you can maybe eliminate this obligation.
            <ol>
                <li>      Determine the exact amount that you “have to” pay to meet this obligation you wish you didn’t have.</li>
                <li>      Disclose the exact amount of this financial obligation with at least one person who you trust, who knows you well and who sees you more powerful than you see yourself.</li>
                <li>Make a list of all of the times you have had similar complaints about other obligations.</li>
                <li>Make a list of 10 things that you love to do and would do for free.</li>
                <li>Discuss your “10 things” list with at least three people who you trust, who know you well and who see you more powerful than you see yourself.</li>
                <li>Brainstorm five to 10 ways you can generate income to pay toward this obligation.</li>
                <ol type="a">
                    <li>Can you take a second or very part-time job?</li>
                    <li>Can you find freelance assignments or odd jobs, such as on <a href="https://www.taskrabbit.com/">TaskRabbit?</a></li>
                    <li>Can you have a yard, estate or other sale?</li>
                    <li>Can you ask friends or family for a gift or loan?</li>
                    <li>Can you take in a roommate? Or become one?</li>
                </ol>
                <li>Brainstorm five to 10 ways you could eliminate this obligation.</li>
                <ol type="a">
                    <li>Can you sell it or transfer ownership?</li>
                    <li>Can you lease it part-time, such as on <a href="https://www.airbnb.com/">airbnb?</a></li>
                    <liCan you delegate it to someone else who benefits from it?</li>
                    <li>Can you return it?</li>
                    <li>Can you ask for loan forgiveness, reduction or other help?</li>
                </ol>
                <li>Add to your action plan some of the actions you brainstormed.</li>
            </ol>
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
