<?php
    include("Dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <link rel="stylesheet" type="text/css" href="main//main.css.css">
</head>
    <div class="item">
<body>
    <header>
        <h1 class="titulopagina centralizado">Maritas da Dona Rita </h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">História</a></li>
                <li><a href="#">Contato</a></li> 
            </ul>
        </nav>
    </header>
    <main>
        <div class="header2">
            <article class="container">
                <div class="item">
                    <Header>
                        <img class="canto" src=<?="../MAPA/Titulo.jpg.png";?>>
                    </Header>
                    <h2 class="titulopagina centralizado">Sinta o Sabor da Comida Caseira Em Qualquer Lugar!!</p>
                    <p><a href="#" class= "btn">Saiba Mais</p>
                </div>
            </article>
            <?php
            ?>
        </div>
        <section class="centralizado">
            <header class="main_cta_header">
                <p></p>
            </header>
            <?php
        foreach($tutoriais as $key => $value){
    ?>
            <article class="wrapper">
                <a href="Pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>>
                <h2><?$value['titulo'];?></h2>
                <p><a href="Pagina2.php" class= "btn">Saiba Mais</p>
                <p><?=substr($value['descrição'], 0,100);?></p>
            </article>
    <?php
        }
    ?>
        </section>
    </main>  
</body>
<footer>
  <nav>
  <ul>
    <li><a href="#" class="btn">Home</a></li>
    <li><a href="#" class="btn">Blog</a></li>
    <li><a href="#" class="btn">História</a></li>
    <li><a href="#" class="btn">Contato</a></li>
  </ul>
  </nav>
</div>
<div>
<h2>Links Úteis</h2>
  <nav>
    <ul>
      <li><a href="#" class="btn">Politica de Provacidade</a></li>
      <li><a href="#" class="btn">Aviso Legal</a></li>
      <li><a href="#" class="btn">Termos de Uso</a></li>
    </ul>
  </nav>
</div>
<div>
  <nav>
    <h2>Links Úteis</h2>
      <ul>
        <li><a href="#" class="btn">Projeto de Divulgação das Marmitas da Dona Rita!</a></li>
      </ul>
  </nav>
  </div>
</body>
    <p>Desenvolvido Por: Luciano Lourenço</p>
</footer>