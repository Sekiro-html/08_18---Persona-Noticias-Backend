<?php  

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
                <p>". $conteudo[$i]['previa'] ."</p>
                <a href='artigo.php?id=". $conteudo[$i]["id"] ."'>leia mais</a>
            </section>";
        }
        if($i == 2 || 3 && $i > 1 && $i < 4){
        echo "<section class='Articles'>
                <div>
                    <h1> ". $conteudo[$i]['titulo'] ." </h1>
                </div>
                <h2> ". $conteudo[$i]['subtitulo'] ."</h2>
                <p> ". $conteudo[$i]['previa'] ."</p>
                <a href='artigo.php?id=". $conteudo[$i]['id'] ."'>leia mais</a>
            </section>";
        }
        if($i == 4) {
            echo "<aside>
                <input type='search'>
                <div>
                    <h1> ". $conteudo[$i]['titulo'] ."</h1>
                    <ul>";
            foreach($conteudo[$i][0] as $index => $conteudolista) {
                echo "<li>$conteudolista</li>";
            };
            echo "</ul>
                </div>
                <div>
                    <ul>";
                    foreach($conteudo[$i][1] as $index => $imgs) {
                        echo "<li>$imgs</li>";
                    }
            echo   "</ul>
                </div>
            </aside>";  
        }

}
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