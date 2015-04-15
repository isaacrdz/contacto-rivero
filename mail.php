<?
// configuración
$mensajeenviado='Enviado correctamente, en breve nos comunicaremos con usted';
$redireccion='https://apps.facebook.com/contactorivero/'; // cuando se envie el mail hacia donde me tengo que ir, eso dice el archivo jeje


// enviamos el email
$nombre=$_POST['namex'];
$correo=$_POST['emailx'];
$telefono=$_POST['telefonox'];
$autode=$_POST['selectx'];
$mensaje=$_POST['txtareax'];

// personales 
$mailx  = 'zack_cpp@hotmail.com';// . ', '; // atención a la coma
//$mailx .= 'dm710021@highergear.net';
//$mailto = "$correo";

//$cuerpomailto ="<h1>Hola</h1>";

$asunto ='Formulario Facebook'; // max 30 caracteres Ok 
//$asuntodos='Gracias por la confianza que nos has brindado' ; // max 30 caracteres Ok 

// cuerpo del mail
$cuerpo = "Formulario de Facebook\n";
$cuerpo .= "\n";
$cuerpo .= "Nombre: $nombre\n";
$cuerpo .= "\n";
$cuerpo .= "Email: $correo\n";
$cuerpo .= "\n";
$cuerpo .= "¿Auto de Interes?: $autode\n";
$cuerpo .= "\n";
$cuerpo .= "Telefono: $telefono\n";
$cuerpo .= "\n";
$cuerpo .= "Comentarios: $mensaje\n"; 

// cabeceras
$cabecera = "MIME-Version:1.0\r\n";
$cabecera .="Content-type:text/html; charset=iso-8859-1\r\n";

// Cabecera que especifica que es un HMTL
$cabecerados  = 'MIME-Version: 1.0' . "\r\n";
$cabecerados .= 'Content-type: text/html; charset=UTF-8859-1' . "\r\n";


// cabeceras
$cabecera="From: Grupo Rivero  <www.gruporivero.com>";
$cabecerados.="From: Grupo Rivero <zack_cpp@hotmail.com>";




// enviamos el email 

mail($mailx,$asunto,utf8_decode($cuerpo),$cabecera);
echo '<script>location.href="'.$redireccion.'";</script>';

//mail($mailto, $asuntodos, utf8_decode($cuerpomailto), $cabecerados);


//echo '<script>location.href="'.$redireccion.'";</script>';
 


?>