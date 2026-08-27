<?php
function criaArtigo(array $conteudoartigo) {
        echo "<section id='artigoGrande'>
            <div id='titulo'>
                <h1>$conteudoartigo[titulo] </h1>
            </div>
            <h2> $conteudoartigo[subtitulo]</h2>
            <img src='$conteudoartigo[imgartigo]' alt=''>
            <p> $conteudoartigo[texto]</p>
          </section>";
}

function CriaAside(array $conteudo) {
    echo "<aside>
            <input type='search' name='pesquisa' placeholder='Pesquisar'>
            <div id='noticiaslidas'>
                <h1> ". $conteudo['titulo'] ."</h1>
                <ul>";
        foreach($conteudo[0] as $index => $conteudolista) {
            echo "<li>$conteudolista</li>";
        };
        echo "</ul>
            </div>
            <div id='imagens'>
                <ul>";
                foreach($conteudo[1] as $index => $imgs) {
                    echo "<li><img src='$imgs'class='img' id='img$index' alt=''></li>";
                }
        echo   "</ul>
            </div>
        </aside>";  
}

function CriaTudo(array $conteudo) {
    
    for($i = 1; $i < 5; $i++) {

        if ($i == 1) {
        echo "<section class='articles' id='article1'>
                <div class='caixaTitulo'>
                    <h1>".$conteudo[$i]['titulo']."</h1>
                </div>
                <img src='". $conteudo[$i]['img'] ."''>
                <div class='caixaTexto'>
                    <h2> ". $conteudo[$i]['subtitulo'] ."</h2>
                    <br>
                    <p>". $conteudo[$i]['previa'] ."</p>
                    <a href='artigo.php?id=". $conteudo[$i]["id"] ."' class='botao'>Leia mais</a>
                </div>
            </section>";
        }

        if($i == 2 && $i > 1 && $i < 4){
        echo "<section class='articles' id='article2'>
                <div class='tv'>
                    <div class='tela'>
                        <div id='titulo'>
                            <h1> ". $conteudo[$i]['titulo'] ." </h1>
                        </div>
                        <div id='noticia'>
                            <h2> ". $conteudo[$i]['subtitulo'] ."</h2>
                            <p> ". $conteudo[$i]['previa'] ."</p>
                            <a href='artigo.php?id=". $conteudo[$i]['id'] ."'>Leia mais</a>
                        </div>
                        <div id='ciano'></div>
                        <div id='limao'></div>
                        <div id='vermelho'></div>
                    </div>
                </div>
            </section>";
        }

        if($i == 3 && $i > 1 && $i < 4){
        echo "<section class='articles' id='article3'>
                <div id='titulo'>
                    <h1 id='titulotext'> ". $conteudo[$i]['titulo'] ." </h1>
                </div>
                <div id='noticianyx'>
                    <h2 id='subtitulo'> ". $conteudo[$i]['subtitulo'] ."</h2>
                    <p id='previa'> ". $conteudo[$i]['previa'] ."</p>
                </div>
                <a href='artigo.php?id=". $conteudo[$i]['id'] ."' id='leiamais'>Leia mais</a>
            </section>";
        }

        if($i == 4) {
            echo "<aside>
                <input type='search' name='pesquisa' placeholder='Pesquisar'>
                <div id='noticiaslidas'>
                    <h1> ". $conteudo[$i]['titulo'] ."</h1>
                    <ul>";
            foreach($conteudo[$i][0] as $index => $conteudolista) {
                echo "<li>$conteudolista</li>";
            };
            echo "</ul>
                </div>
                <div id='imagens'>
                    <ul>";
                    foreach($conteudo[$i][1] as $index => $imgs) {
                        echo "<li><img src='$imgs'class='img' id='img$index' alt=''></li>";
                    }
            echo   "</ul>
                </div>
            </aside>";  
        }

    }
}
?>