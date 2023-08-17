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
    <h2>Exemplo #2</h2>
    <h3>Tratamento de <b>Construtor </b>da Classe</h3>
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
      <?php
      /*---------------------------------------------------------------------*
       *                  exemplo #2 : Tratamento do construtor da classe    *
       *---------------------------------------------------------------------*/
      class Pokemon
      {
        public $nome;
        public $ehLendario;
        public $cor;
        public $tamanho;
        public $temAsa;
        public $temChifre;

        public function __construct()
        {
          $this->preparaPokemon();
        }

        private function preparaPokemon()
        {
          $nome = $_POST['nome'];
          $ehLendario = $_POST['ehLendario'];
          $cor = $_POST['cor'];
          $tamanho = $_POST['tamanho'];
          $temAsa = $_POST['temAsa'];
          $temChifre = $_POST['temChifre'];

          $this->nome = $nome;
          $this->ehLendario = $ehLendario;
          $this->cor = $cor;
          $this->tamanho = $tamanho;
          $this->temAsa = $temAsa;
          $this->temChifre = $temChifre;
        }

        public function getNome()
        {
          return $this->nome;
        }

        public function getEhLendario()
        {
          return $this->ehLendario;
        }

        public function getCor()
        {
          return $this->cor;
        }

        public function getTamanho()
        {
          return $this->tamanho;
        }

        public function getTemAsa()
        {
          return $this->temAsa;
        }

        public function getTemChifre()
        {
          return $this->temChifre;
        }
      }

      $pokemon = new Pokemon();

      ?>
      <table border=”1”>
        <tbody>
          <tr>
            <th colspan="2"><img src="img/exemplo2.png"></th>
          </tr>
          <tr>
            <td><b>Classe</b> </td>
            <td><i>Pokemon</i></td>
          </tr>
          <tr>
            <td><b>Atributos</b> </td>
            <td><i>nome; é lendário?; cor; tamanho; tem asa? tem chifre?</i></td>
          </tr>
          <tr>
            <th colspan="2">Objeto Instanciado</th>
          </tr>
          <tr>
            <td><b>Instância de <i>nome</i> </b> </td>
            <td><?php echo ($pokemon->nome); ?></td>
          </tr>
          <tr>
            <td><b>Instância de <i>é lendário?</i> </b> </td>
            <td><?php echo ($pokemon->ehLendario); ?></td>
          </tr>
          <tr>
            <td><b>Instância de <i>cor</i> </b> </td>
            <td><?php echo ($pokemon->cor); ?></td>
          </tr>
          <tr>
            <td><b>Instância de <i>tamanho</i> </b> </td>
            <td><?php echo ($pokemon->tamanho); ?></td>
          </tr>
          <tr>
            <td><b>Instância de <i>tem asa?</i> </b> </td>
            <td><?php echo ($pokemon->temAsa); ?></td>
          </tr>
          <tr>
            <td><b>Instância de <i>tem chifre?</i> </b> </td>
            <td><?php echo ($pokemon->temChifre); ?></td>
          </tr>
        </tbody>
      </table>
    </article>
  </section>
  <footer>
    <p>Prática de comandos PHP</p>
  </footer>
</body>
</html>