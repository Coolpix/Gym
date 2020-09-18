<?php
if(isset($_POST['submit'])){
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $to = "info@dkteam.es";
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $weight = $_POST['weight'];
    $surname = $_POST['surname'];
    $dni = $_POST['dni'];
    $club = $_POST['club'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $cinturon = $_POST['cinturon'];
    $competitions = $_POST['competitions'];

    $subject = "Formulario torneo";
    $subject2 = "Copia de tu inscripción al torneo";

    $message = "Detalles de la inscripción.\n\n";
    $message .= "Nombre: ".clean_string($name)."\n";
    $message .= "Apellidos: ".clean_string($surname)."\n";
    $message .= "Edad: ".$age."\n";
    $message .= "Teléfono: ".clean_string($phone)."\n";
    $message .= "Email: ".clean_string($email)."\n";
    $message .= "DNI: ".clean_string($dni)."\n";
    $message .= "Sexo: ".clean_string($gender)."\n";
    $message .= "Peso: ".$weight."\n";
    $message .= "Cinturón: ".clean_string($cinturon)."\n";
    $message .= "Club: ".clean_string($club)."\n";
    $message .= "Competiciones: ".clean_string($competitions)."\n";

    $message2 = "Aquí tienes una copia de tu inscripción.\n\n";
    $message2 .= "Nombre: ".clean_string($name)."\n";
    $message2 .= "Apellidos: ".clean_string($surname)."\n";
    $message2 .= "Edad: ".$age."\n";
    $message2 .= "Teléfono: ".clean_string($phone)."\n";
    $message2 .= "Email: ".clean_string($email)."\n";
    $message2 .= "DNI: ".clean_string($dni)."\n";
    $message2 .= "Sexo: ".clean_string($gender)."\n";
    $message2 .= "Peso: ".$weight."\n";
    $message2 .= "Cinturón: ".clean_string($cinturon)."\n";
    $message2 .= "Club: ".clean_string($club)."\n";
    $message2 .= "Competiciones: ".clean_string($competitions)."\n";

    $headers = "From:" . $to;

    mail($to,$subject,$message,$headers);
    mail($email,$subject2,$message2,$headers);
    echo "Inscripción de ".$name." ".$surname." realizada con exito";
   }
?>