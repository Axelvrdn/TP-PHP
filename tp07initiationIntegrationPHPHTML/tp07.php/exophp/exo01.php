<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="exocss.css" rel="stylesheet" type="text/css" />
	<title>Ma première page en PHP</title>
</head>

<body>

<div>
<h1>Ma première page en PHP</h1><br>

<p>
<?php
for ($i=1;$i<=5;$i++)
{
    if ($i % 2 == 0)
    {
        echo "<h2>Affichage n°$i pair</h2>";
    }
    else
    {
        echo "<h2>Affichage n°$i impair</h2>";
    }
}
?>
</p>
</div>
<div id="texte2">



</div>



</body>
</html>
