<html>
<head>
<title></title>
</head>
<body>
<form method="POST" action="mail.php">
wyœlij do mnie maila :
<input type="text" name="wiadomosc">
<br>
<input type="submit" value="ok">
</form>

<? 
extract($_POST);
mail("marwis95@o2.pl", "Aumatic", $wiadomosc);
//echo "mail wyslany";
?> 

</body>
</html>

