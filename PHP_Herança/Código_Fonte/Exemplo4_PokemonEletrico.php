<?php
require_once 'Exemplo4_Pokemon.php';
class PokemonEletrico extends Pokemon
{
	private $soltaRelampagos;
	private $armazenaEnergia;
	private $drenaEnergia;
	
	/* metodo construtor */
	public function __construct($nome, $ehLendario, $cor, $tamanho, $temAsa, $temChifre)
	{
		parent::__construct($nome, $ehLendario, $cor, $tamanho, $temAsa, $temChifre);
	}

	public function getSoltaRelampagos()
	{
		return $this->soltaRelampagos;
	}
	public function setSoltaRelampagos($soltaRelampagos)
	{
		$this->soltaRelampagos = $soltaRelampagos;
	}
	public function getArmazenaEnergia()
	{
		return $this->armazenaEnergia;
	}
	public function setArmazenaEnergia($armazenaEnergia)
	{
		$this->armazenaEnergia = $armazenaEnergia;
	}
	public function getDrenaEnergia()
	{
		return $this->drenaEnergia;
	}
	public function setDrenaEnergia($drenaEnergia)
	{
		$this->$drenaEnergia = $drenaEnergia;
	}
	public function gerarPokemonEletrico($dia, $mes, $ano)
	{
		echo ("<br>*--------------------------------------*");
		echo ("<br>*            Pokémon Elétrico          *");
		echo ("<br>*--------------------------------------*<br>");

		echo "<br>Pokémon ", parent::getNome(), " de tipo Elétrico";
		echo "<br>é lendário? ", parent::getEhLendario();
		echo "<br>solta relâmpagos? ", $this->getSoltaRelampagos();
		echo "<br>armazena energia? ", $this->getArmazenaEnergia();
		echo "<br>drena energia? ", $this->getArmazenaEnergia();
		echo "<br><br>Pokémon encontrado no dia ", $dia, "/", $mes, "/", $ano;
	}
}
