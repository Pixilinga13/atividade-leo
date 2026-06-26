<?php
$ocultarLogin = true;
$tituloConteudo = "CONTEÚDO USER";
$tituloHeader = "HEADER USER";
include 'index.php';
?>
<style>
.menu{
    position: fixed;
    left: 10;
    top: 130px; /* altura aproximada do header */
    width: 200px;
    height: calc(100vh - 80px);
    background-color:skyblue;
    padding: 10px;
}
.container{
    background-color: skyblue;
}
</style>

<div class="menu">
    <h2>Menu do User</h2>
</div>