<?php
$ocultarLogin = true;
$tituloConteudo = "CONTEÚDO ADMIN";
$tituloHeader = "HEADER ADM";
include 'index.php';
?>
<style>
.menu{
    position: fixed;
    left: 10;
    top: 130px; /* altura aproximada do header */
    width: 200px;
    height: calc(100vh - 80px);
    background-color:aqua;
    padding: 10px;
}
.container{
    background-color: aqua;
}
</style>

<div class="menu">
    <h2>Menu do Administrador</h2>
</div>