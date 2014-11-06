<?php
session_start();

//print_r($_SESSION);

//$message_body = "<br>";

$message_body = $message_body . "\nHello again!\n";

$message_body = $message_body . "\nYou said you don't have enough money to...\n";

foreach ($_SESSION["notEnoughMoneyTo"] as $item)
{
   $message_body = $message_body . "         -$item\n";
}


$message_body = $message_body . "\nRemember that you are not alone. More importantly, remember that this is not a permanent condition.\n";



$message_body = $message_body . "\nYour interests in money (e.g., your beliefs about it, your expectations) include: \n";


foreach ($_SESSION["identifyInterests"] as $want => $item)
{
   if ($item != "") 
   {
    $message_body = $message_body . "       -I $want  $item \n";
   }
}
$message_body = $message_body . "\n";

$message_body = $message_body . 
<<<END
We all have interests in money, and our beliefs, expectations or values are somewhat unique to us. That's why others' plans to build wealth don't always work exactly the same for us.
 
If you could have your conflicts with money resolve in one of the ways offered, you would choose  
END;

$message_body = $message_body . $_SESSION['resolutionChoice'] . ".\n\n";

$message_body = $message_body . 
<<<END
The list of solutions offered was not exhaustive, so work with your selection for now and adapt it as necessary. You can always come back to the app. Money issues can be especially stubborn because of all the value and significance we place on it, but do not give up. You are not destined to be poor. You are here to flourish and to share your good fortune.
 
To get some fresh results in your relationship with money, we recommend the following action plan: \n
END;

$message_body = $message_body . $_SESSION['actionPlan'];

$message_body = $message_body . 
<<<END
\n\nFinally, stay on PARR: Plan, Act, Revise, and Repeat, until you get the results you want. If you need additional help, you can buy the first Third Ear Conflict Resolution book, People Don’t Listen: Tune Your Third Ear and Resolve Any Conflict, on our website at www.nschicklaw.com. You can also coach with Nance directly. For more information, send an email request to coaching@nschicklaw.com.
END;



?>
<!DOCTYPE html>
<html>
<body>

<h1>Thank you for using the Third Ear Program</h1>
These are the results of our session:<br>
<p>
<?php

$message_body = htmlentities($message_body);
$html_message_body = $message_body;
//$html_message_body = addslashes($html_message_body);

$html_message_body = preg_replace('/\\n/', '<br>',$html_message_body);
print $html_message_body;


?>

</p>

If you'd like us to email you your results, please enter your email below:
<br><br>
<form action="../gdform.php" method="post">
<input type="hidden" name="subject" value="Your Action Plan from the Third Ear Conflict Resolution app" />
<input type="hidden" name="redirect" value="/app/thankyou.html" />
First Name:  <input type="text" name="FirstName" /><br>
Last Name  :<input type="text" name="LastName" /><br>
Email:  <input type="text" name="email" />
<!-- Comments:  <textarea name="comments" cols="40" rows="10">
Type comments here.</textarea>
-->
<br>
<input type="checkbox" name="sendmail" value="yes">Send me emails about the latest news about the Third Ear Program
<br>
<input type="submit" name="submit" value="submit"/>
<input type="hidden" name="Results" value="<?php


echo "$message_body";


?>">
</form></div></p>


</body>
</html>
