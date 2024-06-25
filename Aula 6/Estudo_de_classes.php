<?php
class Reino {
    // atributos
    public $nome;
    public $populacao;
    public $producao;
    public $poder_militar;

    // função construtor
    public function __construct($nome, $populacao, $producao, $poder_militar) {
        $this->nome = $nome;
        $this->populacao = $populacao;
        $this->producao = $producao;
        $this->poder_militar = $poder_militar;
    }

    // função declarar guerra
    public function declarar_guerra() {
        // implementação da função declarar guerra
    }

    // Método para exibir informações do reino
    public function exibirinformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "População: " . $this->populacao . "<br>";
        echo "Produção: " . $this->producao . "<br>";
        echo "Poder Militar: " . $this->poder_militar . "<br>"; 
    }
}

// instanciando um Reino
$reino = new Reino("Wessex", 64000, "Trigo", 95);
$reino->exibirinformacoes();

// classe filha
class Rei extends Reino {
    // atributos
    public $nome;
    private $idade;
    public $ponto_forte;

    // construtor da classe Rei
    public function __construct($nome, $populacao, $producao, $poder_militar, $idade, $ponto_forte) {
        // chamar construtor da classe pai
        parent::__construct($nome, $populacao, $producao, $poder_militar);
        $this->idade = $idade;
        $this->ponto_forte = $ponto_forte;
    }

    // metodo para exibir informações do Rei
    public function exibirinformacoesRei() {
        // chamar metodo da classe pai
        parent::exibirinformacoes();
        echo "Idade: " . $this->idade . "<br>";
        echo "Ponto Forte: " . $this->ponto_forte . "<br>";
    }
}

// instanciar
$rei = new Rei("Wessex", 64000, "Trigo", 95, 25, "militar");

// exibir informações do Rei
$rei->exibirinformacoesRei();
?>

