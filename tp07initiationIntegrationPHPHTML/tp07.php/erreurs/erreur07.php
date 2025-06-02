<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="erreurs.css" rel="stylesheet" type="text/css" />
	<title>Erreur07</title>
</head>

<body>

<div>
<h1>A VOUS DE TROUVER L'ERREUR !</h1>
<p>

<?php 
$maVar = 0;
echo 'Au d&eacute;part, ma variable est initialis&eacute &agrave '.$maVar. '.<br />';

$maVar = $maVar + 1;

echo "Apr&egrave;s la premi&egrave;re incr&eacute;mentation, elle contient $maVar .<br />";
$maVar++;
echo "Apr&egrave;s la deuxi&egrave;me, elle contient $maVar ...<br />";

?>


</p>
</div>
<div id="texte2">Si
vous voyez :<br />
Au d&eacute;part, ma variable est initialis&eacute; &agrave; 0.<br />
Apr&egrave;s la premi&egrave;re incr&eacute;mentation, elle contient 1<br />
Apr&egrave;s la deuxi&egrave;me, elle contient 2...<br />
<br />
On peut passer &agrave; la suite !<br />

</div>
</body>
</html>
