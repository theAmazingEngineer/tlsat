<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    $from    = "no-reply@tlsatmex.com";
    $to      = "u.vidal@tlsatmex.com";
    $subject = "Nuevo Contacto - Contratar";
    $message = "
        Nombre : ".$_POST["nombre"]."<br/>
        Ciudad : ".$_POST["ciudad"]."<br/>
        Telefono : ".$_POST["telefono"]."<br/>
        Email : ".$_POST["email"]."<br/>
        Mensaje : ".$_POST["mensaje"]."
    ";

    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);

    $file = ( file_exists("log.txt") ) ? fopen("log.txt", "r") : fopen("log.txt","a");
        
    $info="";
    while(!feof($file)) 
    {
        $info .= fgets($file);
    }
    fclose($file);
        
    $file = fopen("log.txt", "w");
    $txt  = "Nuevo Contacto | ".date('l jS \of F Y h:i:s A').chr(13).print_r($_POST,true).chr(13).chr(13).$info;
    fwrite($file,  $txt. PHP_EOL);

    fclose($file);

    Header("Location: index.html");
?>