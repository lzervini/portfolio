 <?php
    $errors = [];

    if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
        $errors['name'] = "Vous n'avez pas renseigné votre nom.";
    }

    
    if (!array_key_exists('mail', $_POST) || $_POST['mail'] == ''){
        $errors['mail'] = "Vous n'avez pas renseigné votre email.";
    }

    
    if (!array_key_exists('msg', $_POST) || $_POST['msg'] == ''){
        $errors['msg'] = "Vous n'avez pas renseigné votre message.";
    }

    if(!empty($errors)){
        session_start();
        $_SESSION['errors'] = $errors;
        header('Location: ../index.php');
    }else{
        $msg = $_POST['msg'];
        $headers = 'FROM: test@codeur.online';
        mail('lea.z@codeur.online', 'Formulaire de contact', $msg, $headers);
    }

var_dump($errors);
die();


?>

