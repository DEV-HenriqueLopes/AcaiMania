<?php

    session_start();

    unset($_SESSION['emailLogin']);
    unset($_SESSION['senhaLogin']);

    echo "<script>alert('Logout realizado com sucesso.');</script>";
    header('Location: login.php');
?>