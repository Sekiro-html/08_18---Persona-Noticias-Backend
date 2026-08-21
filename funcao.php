<?php  

function criaSection1(array $conteudo1) {
    echo "<section class='articles' id='article1'>
            <div class='caixaTitulo'>
                <h1> $conteudo1[titulo] </h1>
            </div>
            <img src='$conteudo1[img]'>
            <div class='caixaTexto'>
            <h2> $conteudo1[subtitulo]</h2>
            <p> $conteudo1[Texto]</p>
            </div>
            <div class='botao'>
            <a href='#'>leia mais</a>
            </div>
          </section>";
}

function criaSection2e3(array $conteudo2) {
    echo "<section class='articles'>
            <div>
                <h1> $conteudo2[titulo] </h1>
            </div>
            <h2> $conteudo2[subtitulo]</h2>
            <p> $conteudo2[Texto]</p>
          </section>";
}

function CriaAside(array $conteudoaside) {
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

?>