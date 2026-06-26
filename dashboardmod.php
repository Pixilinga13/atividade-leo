<?php
$ocultarLogin = true;
$tituloConteudo = "CONTEÚDO MOD";
$tituloHeader = "HEADER MOD";
include 'index.php';
?>
<style>
.menu{
    position: fixed;
    left: 10;
    top: 130px; /* altura aproximada do header */
    width: 200px;
    height: calc(100vh - 80px);
    background-color:violet;
    padding: 10px;
}
.container{
    background-color: violet;
}
</style>

<div class="menu">
    <h2>Menu do Moderador</h2>
</div>