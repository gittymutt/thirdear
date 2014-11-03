<?php
session_start();

//print_r($_SESSION);

//$message_body = "<br>";

$message_body = $message_body . "\nSo, you feel that you don't have enough money to...\n";
//$message_body = $message_body . "";


foreach ($_SESSION["notEnoughMoneyTo"] as $item)
{
   $message_body = $message_body . "         -$item\n";
}
//$message_body = $message_body . "</ul>";

 $message_body = $message_body . "\nHow you feel:\n";

foreach ($_SESSION["identifyInterests"] as $want => $item)
{
   if ($item != "") 
   {
    $message_body = $message_body . "       -I $want  $item \n";
   }
}


?>
<!DOCTYPE html>
<html>
<body>

<h1>Thank you for using the Third Ear Program</h1>
These are the results of our session:<br>
<p>
<?php
$html_message_body = $message_body;


$html_message_body = preg_replace('/\\n/', '<br>',$html_message_body);
print $html_message_body;


?>

</p>

If you'd like us to e-mail you your results, please enter your email below:
<br><br>
<form action="../gdform.php" method="post">
<input type="hidden" name="subject" value="Third Ear App Submission" />
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
<input type="hidden" name="form_order" value="alpha"/>
<input type="hidden" name="form_delivery" value="hourly_digest"/>
<input type="hidden" name="form_format" value="html"/>
<input type="hidden" name="theEmailBody" value="<?php

echo "$message_body";


?>">
</form></div></p>


</body>
</html>
