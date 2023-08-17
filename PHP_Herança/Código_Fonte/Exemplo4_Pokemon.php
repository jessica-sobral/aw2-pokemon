<?php
class Pokemon
{
  public $nome;
  public $ehLendario;
  public $cor;
  public $tamanho;
  public $temAsa;
  public $temChifre;

  //construtor da classe
  public function __construct($nome, $ehLendario, $cor, $tamanho, $temAsa, $temChifre)
  {
    $this->setNome($nome);
    $this->setEhLendario($ehLendario);
    $this->setCor($cor);
    $this->setTamanho($tamanho);
    $this->setTemAsa($temAsa);
    $this->setTemChifre($temChifre);
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
  
  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setEhLendario($ehLendario)
  {
    $this->ehLendario = $ehLendario;
  }

  public function setCor($cor)
  {
    $this->cor = $cor;
  }

  public function setTamanho($tamanho)
  {
    $this->tamanho = $tamanho;
  }

  public function setTemAsa($temAsa)
  {
    $this->temAsa = $temAsa;
  }

  public function setTemChifre($temChifre)
  {
    $this->temChifre = $temChifre;
  }

  public function mostraDadosDoPokemon()
  {
    echo ("<br>*--------------------------------------*");
    echo ("<br>*            Dados do Pokémon          *");
    echo ("<br>*--------------------------------------*<br>");
    echo "<br>Nome do Pokémon: ", $this->getNome();
    echo "<br>Cor: ", $this->getCor();
    echo "<br>Tamanho: ", $this->getTamanho();
    echo "<br>";
  }
}
