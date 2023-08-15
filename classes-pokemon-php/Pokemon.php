class Pokemon {
    private $nome;
    private $e_lendario;
    private $cor;
    private $tamanho;
    private $quadrupede_bipede;
    private $tem_asa;
    private $tem_chifre;

    public function __construct($nome, $e_lendario, $cor, $tamanho, $quadrupede_bipede, $tem_asa, $tem_chifre) {
        $this->nome = $nome;
        $this->e_lendario = $e_lendario;
        $this->cor = $cor;
        $this->tamanho = $tamanho;
        $this->quadrupede_bipede = $quadrupede_bipede;
        $this->tem_asa = $tem_asa;
        $this->tem_chifre = $tem_chifre;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getELendario() {
        return $this->e_lendario;
    }

    public function setELendario($e_lendario) {
        $this->e_lendario = $e_lendario;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    public function getQuadrupedeBipede() {
        return $this->quadrupede_bipede;
    }

    public function setQuadrupedeBipede($quadrupede_bipede) {
        $this->quadrupede_bipede = $quadrupede_bipede;
    }

    public function getTemAsa() {
        return $this->tem_asa;
    }

    public function setTemAsa($tem_asa) {
        $this->tem_asa = $tem_asa;
    }

    public function getTemChifre() {
        return $this->tem_chifre;
    }

    public function setTemChifre($tem_chifre) {
        $this->tem_chifre = $tem_chifre;
    }
}
