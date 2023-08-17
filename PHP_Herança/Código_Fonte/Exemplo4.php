<!DOCTYPE html>
<html lang="en">

<head>
  <title>CSS Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
  <h2>Manipulação de Arquivos</h2>
  <p>Nesta aula trataremos o paradigma de <b>Orientação a Objetos</b> com PHP</p>
  <header>
    <h2>Exemplo #4</h2>
    <h3>Tratamento de <b>Herança </b></h3>
  </header>
  <section>
    <nav>
      <ul>
        <li><a href="exemplo1.php">Classe: Criar Objeto</a></li>
        <li><a href="exemplo2.php">Construtor da Classe</a></li>
        <li><a href="exemplo3.php">Construtor Com Parâmetros</a></li>
        <li><a href="exemplo4.php">Herança</a></li>
        <li><a href="index.php">Retorna ao Menu principal</a></li>
      </ul>
    </nav>

    <article>
      <h1>Veja aqui o resultado </h1>
      <!--
      /*---------------------------------------------------------------------*
       *                  exemplo #4 : Trata herança            *
       *---------------------------------------------------------------------*/ 
      -->
      <form method="post" action="Exemplo4_TrataHeranca.php">
        Digite o nome do Pokémon:
        <input type="text" name="nome" required />
        <br>Digite se é lendário:
        <input type="text" name="ehLendario" required />
        <br>Digite a cor:
        <input type="text" name="cor" required />
        <br>Digite o tamanho:
        <input type="text" name="tamanho" required />
        <br>Digite se tem asa:
        <input type="text" name="temAsa" required />
        <br>Digite se tem chifre:
        <input type="text" name="temChifre" required />
        <br>
        <input type="submit" value="Enviar" />
      </form>
    </article>
  </section>
  <footer>
    <p>Prática de comandos PHP</p>
  </footer>
</body>
</html>