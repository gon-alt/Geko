<? php 
//llamando a los campos
$nmbre = $_POST["nombre"];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];

//datos del correo

$destinatario = "biekenbuenosaires@gmail.com";
$asunto = "Contacto desde Nuestra web";

$carta = "De: $nombre \n Email: $email \n Telefono: $email \n Asunto: $asunto";

//envio del mensaje

mail ($destinatario, $asunto, $carta);


 ?>
 