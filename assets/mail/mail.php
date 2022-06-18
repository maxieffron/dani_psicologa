<?php


require("class.phpmailer.php");
require("class.smtp.php");

/* ------ captura de los campos ------ 
LO QUE VA DESPUÉS EL SIGNO $ ES EL NOMBRE DE LA VARIABLE.
LO QUE VA ENTRE CORCHETES DEBE COINCIDIR CON EL NAME DEL INPUT QUE HICIMOS EN EL FORMULARIO.
*/


// ** CAMPOS QUE COMPLETAMOS EN EL FORMULARIO **

//Nombre y Apellido
$name = $_POST['name'];
//Convertimos los caracteres especiales en caracteres adecuados (Ej: Acentos)
$name = utf8_decode($name); 

//Teléfono
$phone = $_POST['phone'];


//Mail
$email = $_POST['email'];
$email = utf8_decode($email);

$nationality = $_POST['nationality'];

//Asunto
$subject = "Inscripción";
//Convertimos los caracteres especiales en caracteres adecuados (Ej: Acentos)
$subject = utf8_decode($subject); 

//Mensaje
$message = $_POST['message'];
//Convertimos los caracteres especiales en caracteres adecuados (Ej: Acentos)
$message = utf8_decode($message); 

// Valores enviados desde el formulario
if ( !isset($name) || !isset($phone) || !isset($email) || !isset($nationality) || !isset($message) ) {
    die ("Es necesario completar todos los datos del formulario");
}

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c2051336.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "taller@nacerconotroser.com";  // Mi cuenta de correo
$smtpClave = "Balonim10";  // Mi contraseña

//Destinatario (Mi mail)
$emailDestino = "nacerconotroser@gmail.com";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

//****** VALORES A MODIFICAR ******//
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


/****** ARMADO DEL MAIL ******/
$mail->From = "taller@nacerconotroser.com"; // Email desde donde envío el correo.
$mail->FromName = "Inscripción al Taller";
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario


// Cuerpo del email
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


// Este es el titulo del email.
$mail->Subject = "Inscripción"; 
$mensajeHtml = nl2br($message);
$mail->Body = "{$mensajeHtml}"; // Texto del email en formato HTML
$mail->AltBody = "{$message}"; // Texto sin formato HTML

//******  FIN - VALORES A MODIFICAR ******//

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurrió un error inesperado.";
}

?>




