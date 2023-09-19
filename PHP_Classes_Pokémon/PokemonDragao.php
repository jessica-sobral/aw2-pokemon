class PokemonDragao extends Pokemon {
    private $tipo;
    private $origem;
    private $regiao;
    private $imgUrl;

    public function __construct($nome, $e_lendario, $cor, $tamanho, $quadrupede_bipede, $tem_asa, $tem_chifre,
                                $tipo, $origem, $regiao, $imgUrl) {
        parent::__construct($nome, $e_lendario, $cor, $tamanho, $quadrupede_bipede, $tem_asa, $tem_chifre);
        $this->tipo = $tipo;
        $this->origem = $origem;
        $this->regiao = $regiao;
        $this->imgUrl = $imgUrl;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getOrigem() {
        return $this->origem;
    }

    public function setOrigem($origem) {
        $this->origem = $origem;
    }

    public function getRegiao() {
        return $this->regiao;
    }

    public function setRegiao($regiao) {
        $this->regiao = $regiao;
    }

    public function getImgUrl() {
        return $this->imgUrl;
    }

    public function setImgUrl($imgUrl) {
        $this->imgUrl = $imgUrl;
    }
}