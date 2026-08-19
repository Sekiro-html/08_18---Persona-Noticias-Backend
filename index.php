<?php 
require_once "dados.php";
require_once 'funcao.php';

?>

<main>
    <?php criaSection1($colecao_artigos[0]);
          criaSection2e3($colecao_artigos[1]);
          criaSection2e3($colecao_artigos[2]);
          CriaAside($colecao_artigos[3])
    ?>
</main>

<?php include 'footer.php';?>