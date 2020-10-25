<?php
// error_reporting('E_ALL');

$email = $_GET['m'];
$hash = $_GET['h'];
$err = 0;

if ($email == '') { $err++; } 
if ($hash == '') { $err++ ; }

if ($err > 0) { echo "eroare";//header('Location: http://www.google.com'); die(); }

if ($email != '' && $hash != '') {
	$word = '123456';
	$newhash = md5($email + $word);
	if ($newhash != $hash) { header('Location: http://www.google.com'); }
	if( strpos(file_get_contents("test.txt"),$email) === false) {
			$file = 'test.txt';
			$data = "$email\n";
		   $handle = fopen($file, 'a') or die('Cannot open file:  '.$file);
		   fwrite($handle, $data);
		   echo 'Nu exista. Adaugat';
		
	} else {
		header('Location: http://www.google.com');
	}
}
?>