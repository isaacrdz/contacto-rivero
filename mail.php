<?
// configuración
$mensajeenviado='Enviado correctamente, en breve nos comunicaremos con usted';
$redireccionx='https://fb-contact-form.herokuapp.com/gracias.php'; // cuando se envie el mail hacia donde me tengo que ir, eso dice el archivo jeje
$mensajenoenviado='Favor de completar las palabras correctamente';
$redireccionx='https://fb-contact-form.herokuapp.com/gracias.php'; // cuando se envie el mail hacia donde me tengo que ir, eso dice el archivo jeje

// enviamos el email
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$autode=$_POST['seleccion'];
$mensaje=$_POST['mensaje'];

// personales 
$mailx  = 'zack_cpp@hotmail.com' . ', '; // atención a la coma
$mailx .= 'dm710021@highergear.net';
$mailto = "$correo";

$cuerpomailto ="

<h1>Hola</h1>




<style> 
p
  {
    font-size: 20px;
  } 


/style>
  
";

$asunto ='Formulario Facebook'; // max 30 caracteres Ok 
$asuntodos='Gracias por la confianza que nos has brindado' ; // max 30 caracteres Ok 

// cuerpo del mail
$cuerpo = "Formulario de Rivero Renta\n";
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
 if (isset($_POST['submit1'])){
  require_once('recaptchalib.php');
  $privatekey = "6LeFBPASAAAAAM7hcmZdp_kiWySrqLfw_1q10w1H";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
echo '<script>alert("'.$mensajenoenviado.'");</script>'; //
echo '<script>location.href="'.$redireccionx.'";</script>';

  } else {
mail($mailx,$asunto,utf8_decode($cuerpo),$cabecera);
mail($mailto, $asuntodos, utf8_decode($cuerpomailto), $cabecerados);

echo '<script>alert("'.$mensajeenviado.'");</script>'; //
echo '<script>location.href="'.$redireccion.'";</script>';
        }
  }



?>