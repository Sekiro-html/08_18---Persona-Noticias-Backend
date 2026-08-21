<?php 
require_once "dados.php";
require_once 'funcao.php';
include './componentes/header.php';
?>

<main>
    <?php criaSection1($colecao_artigos[0]);
          CriaAside($colecao_artigos[3]);
          criaSection2e3($colecao_artigos[1]);
          criaSection2e3($colecao_artigos[2]);
    ?>
</main>

<?php include 'componentes/footer.php';?>
