 <?php

    $msg = $_POST['msg'];
    $headers = 'FROM: test@codeur.online';
    mail('lea.z@codeur.online', 'Formulaire de contact', $msg, $headers);
?>

