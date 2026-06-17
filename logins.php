<?php
session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

if ($user === 'admin' && $pass === 'admin123') {

    $_SESSION['usuario'] = $user;
    $_SESSION['nivel'] = 'admin';

    header('Location: dashboardadm.php');
    exit();
    include 'index.html';

} elseif ($user === 'mod' && $pass === 'mod123') {

    $_SESSION['usuario'] = $user;
    $_SESSION['nivel'] = 'moderador';

    header('Location: dashboardmod.php');
    exit();
    include 'index.html';

} elseif ($user === 'user' && $pass === 'user123') {

    $_SESSION['usuario'] = $user;
    $_SESSION['nivel'] = 'usuario';

    header('Location: dashboarduser.php');
    exit();
    include 'index.html';
} 
else {

    echo "Credenciais inválidas. Tente novamente.";
    exit();

}
?>

