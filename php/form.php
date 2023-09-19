<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Contacto mi form / name / con el server a traves de los name
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $contactado = $_POST['contactado'];

    //Como me va a llegar el cuermo del mail a mí

    $mensaje = "Este mensaje fue enviado por " . $nombre . $apellido . ",\r\n";
    $mensaje = "Su e-mail es:" . $mail . " \r\n";
    $mensaje = "Su teléfono es:" . $telefono . " \r\n";
    $mensaje = "Mensaje:" . $_POST['mensaje'] . " \r\n";
    $mensaje = "Este mensaje fue enviado el " . $fecha . " \r\n";
    if ($contactado === 'telefono') {
        $mensaje .= "El usuario desea ser contactado por whatsapp.";
    } elseif ($contactado === 'email') {
        $mensaje .= "El usuario desea ser contactado por correo electrónico.";
    }

    $despinatario = 'fndiiorio@hotmail.com';
    $asunto = 'Enviado desde SyS PC // ' . $asunto;

    //funcion mail
    mail($despinatario, $asunto, utf8_decode($mensaje), $header);

    //redirección al haber enviado el form 
    header('Location:exito.html');
    exit;
}
