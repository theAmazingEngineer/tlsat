<?php
/* AJAX check  */
if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest' ) {
  die(json_encode(array("success" => 0, "message" => "Access Denied.")));  
  }


$para = "ventas@tlsatmex.com";
$titulo = "¡Nuevo Mensaje!";
$bodyhtml = '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TLSATMEX - ¡Nuevo Mensaje!</title>
</head>
<body style="background-color: #FFF; color:#222; font-family: "Trebuchet MS", sans-serif; margin:0;">
<table width="700" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="20" align="center" valign="middle"><img src="http://tlsatmex.com/img/tlsat-color.png" width="350" alt="" style="margin: 10px 0;"/></td>
    </tr>
    <tr>
      <td height="20" align="center" valign="middle"><table width="500" border="0" cellspacing="0" cellpadding="0" style="background-color: #111; border: 3px solid #111; border-radius: 5px; min-width:350px">
        <tbody>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td height="50" align="center" valign="middle"><h2 style="color:#FFF;">¡Nuevo Mensaje!</h2></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><table width="325px" border="0" cellspacing="0" cellpadding="0" style="background-color:#FFF; border: 3px solid #111; border-radius: 10px; padding:10px 20px;">
              <tbody>
                <tr>
                  <td align="center" valign="middle"><table width="350" border="0" cellspacing="0" cellpadding="0" style="">
                    <tbody>
                      <tr>
                        <td height="20"><h3 style="margin:0;">Website:</h3></td>
                      </tr>
                      <tr>
                        <td height="20">TLSATMEX</td>
                      </tr>
                      <tr>
                        <td height="20"><hr></td>
                      </tr>
                      <tr>
                        <td height="20"><h3 style="margin:0;">Nombre:</h3></td>
                      </tr>
                      <tr>
                        <td height="20">'.$_POST['name'].'</td>
                      </tr>
                      <tr>
                        <td height="20"><hr></td>
                      </tr>
                      <tr>
                        <td height="20"><h3 style="margin:0;">Email:</h3></td>
                      </tr>
                      <tr>
                        <td height="10">'.$_POST['email'].'</td>
                      </tr>
                      <tr>
                        <td height="20"><hr></td>
                      </tr>
                      <tr>
                        <td height="20"><h3 style="margin:0;">Teléfono:</h3></td>
                      </tr>
                      <tr>
                        <td height="20">'.$_POST['phone'].'</td>
                      </tr>
                      <tr>
                        <td height="20"><hr></td>
                      </tr>
                      <tr>
                        <td height="20"><h3 style="margin:0;">Mensaje:</h3></td>
                      </tr>
                      <tr>
                        <td height="20">'.$_POST['message'].'</td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="20" align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td height="40" align="center" valign="middle"><p style="display:inline-block; font-size: 10px; margin:0 10%; width:80%;">This is simply to confirm that you are the owner of this email address.</p></td>
    </tr>
    <tr>
      <td height="20" align="center" valign="middle">&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: noreply@tlsatmex.com' . "\r\n";
$cabeceras .= 'Bcc: 150@webxys.com' . "\r\n";
$cabeceras .= 'Bcc: 151@webxys.com' . "\r\n";
$cabeceras .= 'Bcc: hola@pandama.mx' . "\r\n";

if(mail($para, $titulo, $bodyhtml, $cabeceras))  {
    die(json_encode(array("success" => 1, "message" => "Mensaje enviado."))); 
  }
  else {
    die(json_encode(array("success" => 0, "message" => "Hubo un error al mandar el mensaje, por favor intente nuevamente"))); 
  }