<?php
session_start();

?>

<html>
<head>
</head>
<body>
So, you feel that you don't have enough money to...
<br>
<?php
//print_r($_SESSION["notEnoughMoneyTo"]);
//print "<br>";
print "<br>";
print "<ul>";
foreach ($_SESSION["notEnoughMoneyTo"] as $item)
{
   print "<li>$item</li>";
}
print "</ul>";
//print "identify nterests:";
//print_r($_SESSION["identifyInterests"]);
print "<br> How you feel:<br><br>";

print "<ul>";
foreach ($_SESSION["identifyInterests"] as $want => $item)
{
   if ($item != "") 
   {
   print "<li>I $want  $item</li>";
   }
}

print "</ul>";

?>
</body>

</html>

