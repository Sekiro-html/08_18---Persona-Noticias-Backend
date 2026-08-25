<?php 
require_once "dados.php";
require_once 'funcao.php';
include './componentes/header.php';
?>

<main>
    <?php 
          criaSection1($colecao_artigos[1]);
          criaSection2($colecao_artigos[2]);
          criaSection3($colecao_artigos[3]);
          CriaAside($colecao_artigos[4]);
    ?>
</main>

<?php include 'componentes/footer.php';?>
