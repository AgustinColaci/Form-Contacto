<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviado</title>
</head>
<body>

    

    <?php 
$myemail = 'agustincolaci@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>


<div>
        <h1>Contacto</h1>

        <form method= "post" action="enviar.php">
            <input type="text" name="nombre" placeholder="Nombre y Apellido">
            <br>
            <input type="email" name="email" placeholder="Email">
            <textarea type= "text" name="mensaje" placeholder="Escriba aquí su mensaje"></textarea>
            <br>
            <input type="submit" value="ENVIAR">

        </form>
    </div>
    
</body>
</html>