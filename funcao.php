<?php  

function criaSection1(array $conteudo1) {
    echo "<section class='articles' id='article1'>
            <div class='caixaTitulo'>
                <h1> $conteudo1[titulo] </h1>
            </div>
            <img src='$conteudo1[img]'>
            <div class='caixaTexto'>
                <h2> $conteudo1[subtitulo]</h2>
                <p> $conteudo1[previa]</p>
                <a href='artigo.php?id=$conteudo1[id]'>leia mais</a>
            </div>
          </section>";
}

function criaSection2(array $conteudo2) {
    echo "<section class='articles'>
            <div>
                <h1> $conteudo2[titulo] </h1>
            </div>
            <h2> $conteudo2[subtitulo]</h2>
            <p> $conteudo2[previa]</p>

          </section>";
}

function criaSection3(array $conteudo3) {
    echo "<section class='articles'>
            <div>
                <h1> $conteudo3[titulo] </h1>
            </div>
            <h2> $conteudo3[subtitulo]</h2>
            <p> $conteudo3[previa]</p>

          </section>";
}

function criaAside(array $conteudoaside) {
        echo "<aside>
            <input type='search'>
            <div>
                <h1> $conteudoaside[titulo]</h1>
                <ul>";
        foreach($conteudoaside[0] as $conteudo => $index) {
            echo "<li>$index</li>";
        };
        echo "</ul>
            </div>
            <div>
                <ul>";
                foreach($conteudoaside[1] as $index => $imgs) {
                    echo "<li>$imgs</li>";
                }
        echo   "</ul>
            </div>
          </aside>";  
}

function criaArtigo(array $conteudoartigo) {
        echo "<section class='artigoGrande'>
            <div>
                <h1>$conteudoartigo[titulo] </h1>
            </div>
            <h2> $conteudoartigo[subtitulo]</h2>
            <img src='$conteudoartigo[imgartigo]' alt=''>
            <p> $conteudoartigo[texto]</p>
          </section>";
}

?>