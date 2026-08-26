<?php 
require_once 'dados.php';
require_once 'funcao.php';
include 'componentes/header.php';


?>
<main>
    <?php
     CriaArtigo($colecao_artigos[$_GET["id"]]);
     CriaTudo($colecao_artigos)
    ?>
</main>

<?php include 'componentes/footer.php';?>