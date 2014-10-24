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
//print_r($_SESSION);
print "<br>";
print "<ul>";
foreach ($_SESSION["notEnoughMoneyTo"] as $item)
{
   print "<li>$item</li>";
}
print "</ul>";
?>
</body>

</html>

