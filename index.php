<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container {
    display: flex;
    align-items: center;
    padding: 15px;
    background-color: rgb(187, 187, 187);
}

.form {
    margin-left: auto; /* Empurra o formulário para o final da div */
    display: flex;
    align-items: flex-end;
    justify-content: right;
    gap: 10px;
}
.cont{
    margin-top: 500px;
}

    </style>
    
</head>
<body>
    <div class="container">
     <h1>
        <?php
        if (isset($tituloHeader)) {
            echo $tituloHeader;
        } else {
            echo "HEADER BÁSICO";
        }
        ?>
        </h1>   

    <?php if (!isset($ocultarLogin)) { ?>
        <form action="logins.php" method="post" class="form">
            User:<input type="text" id="username" name="username" required>

            Password:<input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    <?php } else { ?>
        <div class="form">
            <a href="config.php">Configurações</a>
            <a href="index.php">
                <button type="button">Logout</button>
            </a>
        </div>
    <?php } ?>
</div>
<div class="cont">
    <center>
        <h1>
            <?php
            if (isset($tituloConteudo)) {
                echo $tituloConteudo;
            } else {
                echo "CONTEÚDO BÁSICO";
            }
            ?>
        </h1>
    </center>
</div>
   


</body>
</html>
