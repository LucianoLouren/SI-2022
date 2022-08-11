<?php
    include("Dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
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
        
        <section class="main_tutorial">
            <header class="main_cta_header">
                <h1></h1>
                <p></p>
            </header>
            <?php
            $id = $_GET['id'];
            echo "id = " , $id;

        foreach($tutoriais as $key => $value){
            if($value['id'] == $id){
    ?>
            <article>
                <a href="#"><img src=<?=$value['imagem'];?>>
                <h2><?$value['titulo'];?></h2>
                <p><a href="Pagina2.php" class= "btn">Saiba Mais</p>
                <p><?=substr($value['descrição'], 0, 100);?></p>
            </article>
    <?php
            }
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