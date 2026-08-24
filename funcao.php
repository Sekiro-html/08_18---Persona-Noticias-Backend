<?php  

function criaSection1(array $conteudo1) {
    echo "<section id='Article1'>
            <div>
                <h1> $conteudo1[titulo] </h1>
            </div>
            <h2> $conteudo1[subtitulo]</h2>
            <p> $conteudo1[previa]</p>
            <img src='$conteudo1[img]'>
            <a href='artigo.php?id=$conteudo1[id]'>leia mais</a>
          </section>";
}

function criaSection2e3(array $conteudo2) {
    echo "<section class='Articles'>
            <div>
                <h1> $conteudo2[titulo] </h1>
            </div>
            <h2> $conteudo2[subtitulo]</h2>
            <p> $conteudo2[previa]</p>
          </section>";
}

function CriaAside(array $conteudoaside) {
        echo "<section class='Articles'>
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
          </section>";  
}

function CriaArtigo(array $conteudoartigo) {
        echo "<section class='ArtigoGrande'>
            <div>
                <h1>$conteudoartigo[titulo] </h1>
            </div>
            <h2> $conteudoartigo[subtitulo]</h2>
            <p> $conteudoartigo[previa]</p>
          </section>";
}

?>