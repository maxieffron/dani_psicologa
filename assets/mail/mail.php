<?php



/* ------ captura de los campos ------ 
LO QUE VA DESPUÉS EL SIGNO $ ES EL NOMBRE DE LA VARIABLE.
LO QUE VA ENTRE CORCHETES DEBE COINCIDIR CON EL NAME DEL INPUT QUE HICIMOS EN EL FORMULARIO.
*/

//Destinatario (Mi mail)
$destinatario = "nacerconotroser@gmail.com";



// ** CAMPOS QUE COMPLETAMOS EN EL FORMULARIO **

//Nombre y Apellido
$name = $_POST['name'];
//Convertimos los caracteres especiales en caracteres adecuados (Ej: Acentos)
$name = utf8_decode($name); 

//Teléfono
$phone = $_POST['phone'];

//Mail
$email = $_POST['email'];

$nationality = $_POST['nationality'];

//Asunto
$subject = "Inscripción";
//Convertimos los caracteres especiales en caracteres adecuados (Ej: Acentos)
$subject = utf8_decode($subject); 

//Mensaje
$message = $_POST['message'];
//Convertimos los caracteres especiales en caracteres adecuados (Ej: Acentos)
$message = utf8_decode($message); 



//Cabecera
$cabecera = "From: $name <$email>\nReply-To:$email\nContent-Type: text/html; charset=iso-8859-1\n";


// cuerpo del email
$message="
<strong>Nombre y Apellido:</strong> $name <br/>
<br />
<strong>Tel&eacute;fono:</strong> $phone  <br/>
<br/>
<strong>E-Mail:</strong> $email <br/>
<br />
<strong>Nacionalidad:</strong> $nationality <br/>
<br />

<strong>Mensaje:</strong> <br/>
$message <br/>

";


// envío del email
// Se compone de lo siguiente:
/*

1) Destinatario
2) luego de la "," viene el Asunto
3) "From" es el Remitente
4) el "nReply-to" es el "Responder a..."
*/
//mail("info@daletdesign.com.ar", $asunto, $mensaje, "From: $nombre <$mail>\nReply-To:$mail\nContent-Type: text/html; charset=iso-8859-1\n");
//

         /*include '../index.html';Incluyo la página principal*/
		if (mail($destinatario, $subject, $message, $cabecera)) { 
		 echo "Success";
		}

	    else{
	     
	     echo "Error";

	    }

?>




