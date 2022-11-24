<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'b6e31f7b4f7307';
        $mail->Password = '0d305e3bc59cbb';

        $mail->setFrom("cuentas@appsaon.com");
        $mail->addAddress("cuentas@appsaon.com", "AppSalon.com");
        $mail->Subject = "Confirma tu cuenta";

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = "UTF-8";

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Creaste tu cuenta en AppSalon, solo resta que la confirmes haciendo click en el enlace</p>";
        $contenido .= "<p>Hace click acá: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si no solicitaste esta cuenta, podes ignorar el mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        // Enviar mail
        $mail->send();
    }

    public function enviarInstrucciones() {

                // Crear el objeto de email
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.mailtrap.io';
                $mail->SMTPAuth = true;
                $mail->Port = 2525;
                $mail->Username = 'b6e31f7b4f7307';
                $mail->Password = '0d305e3bc59cbb';
        
                $mail->setFrom("cuentas@appsaon.com");
                $mail->addAddress("cuentas@appsaon.com", "AppSalon.com");
                $mail->Subject = "Reestablece tu contraseña";

                // Set HTML
                $mail->isHTML(TRUE);
                $mail->CharSet = "UTF-8";

                $contenido = "<html>";
                $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Solicitaste reestablecer tu contraseña, hacé click en el siguiente enlace para hacerlo </p>";
                $contenido .= "<p>Hace click acá: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'> Restablece tu contraseña </a> </p>";
                $contenido .= "<p>Si no fuiste vos quien lo solicitó, podes ignorar el mensaje</p>";
                $contenido .= "</html>";
                $mail->Body = $contenido;

                // Enviar mail
                $mail->send();
    }
}