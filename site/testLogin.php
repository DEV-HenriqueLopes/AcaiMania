<?php 

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['emailLogin']) && !empty($_POST['senhaLogin'])) {
        include_once('config.php');

        $emailLogin = $_POST['emailLogin'];
        $senhaLogin = $_POST['senhaLogin'];

        $sql = "SELECT * FROM usuarios WHERE email = '$emailLogin' AND senha = '$senhaLogin'";

        $result = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($result) > 0) {

            $_SESSION['emailLogin'] = $emailLogin;
            $_SESSION['senhaLogin'] = $senhaLogin;

            if($emailLogin == "administrador@gmail.com" && $senhaLogin == "admin123") {
                $_SESSION['alert'] = "Login como administrador feito com sucesso!";
                header('Location: admin.php');
            }
            else {
                $_SESSION['alert'] = "Login feito com sucesso!";
                header('Location: login.php');
            }
        } 
        
        else {
            $_SESSION['alert'] = "Email ou senha incorretos!";
            header('Location: login.php');

            unset($_SESSION['emailLogin']);
            unset($_SESSION['senhaLogin']);
        }
    }

    else {
        $_SESSION['alert'] = "Email ou senha invalidos!";
        header('Location: login.php');
    }

?>