 <?php
    $errors = [];

    if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
        $errors['name'] = "Vous n'avez pas renseigné votre nom.";
    }

    
    if (!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
        $errors['mail'] = "Vous n'avez pas renseigné un e-mail valide.";
    }

    
    if (!array_key_exists('msg', $_POST) || $_POST['msg'] == ''){
        $errors['msg'] = "Vous n'avez pas renseigné votre message.";
    }

    session_start();

    if(!empty($errors)){
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: ../index.php');
    }else{
        $_SESSION['success'] = 1;
        $msg = $_POST['msg'];
        $headers = 'FROM: ' . $_POST['mail'];
        mail('lea.z@codeur.online', 'Message de ' .$_POST['name'], $msg, $headers);
        header('Location: ../index.php');
    }

die();


?>

