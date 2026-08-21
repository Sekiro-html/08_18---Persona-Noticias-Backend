<?php  

function criaSection1(array $conteudo1) {
    echo "<section id='Article1'>
            <div>
                <h1> $conteudo1[titulo] </h1>
            </div>
            <h2> $conteudo1[subtitulo]</h2>
            <p> $conteudo1[Texto]</p>
            <img src='$conteudo1[img]'
            <button></button>
          </section>";
}

function criaSection2e3(array $conteudo2) {
    echo "<section class='Articles'>
            <div>
                <h1> $conteudo2[titulo] </h1>
            </div>
            <h2> $conteudo2[subtitulo]</h2>
            <p> $conteudo2[Texto]</p>
          </section>";
}

function CriaAside(array $conteudoaside) {
        echo "<section class='Articles'>
            <input type='search'>
            <div>
                <h1> $conteudoaside[titulo]</h1>
                <ul>

                </ul>
            </div>
          </section>";
}

?>