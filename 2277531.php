<?php 

class Pessoa {
    private $nome;
    private $idade;
    private $cpf;
    private static $numPessoas = 0;

    public function __construct($nome, $idade, $cpf) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setCpf($cpf);
        self::$numPessoas++;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        if(empty($nome) || !is_string($nome)) {
            throw new InvalidArgumentException('Nome inválido.');
        }
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;    
    }

    public function setIdade($idade){
        if (!is_numeric($idade) || $idade < 0 || $idade > 150) {
            throw new InvalidArgumentException('Idade inválida.');
        }
        $this->idade = $idade;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf){
        if (empty($idade) || !is_string($idade)) {
            throw new InvalidArgumentException('CPF inválido.');
        }
        $this->cpf = $cpf;
    }

    public static function getNumPessoas() {
        return self::$numPessoas;
    }
}

class Aluno{
    private $nome;
    private $idade;
    private $cpf;
    private $ra;
    private $notas;
    private $faltas;

    public function __construct($nome, $idade, $cpf, $ra, $notas, $faltas) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setCpf($cpf);
        $this->setRa($ra);
        $this->setNotas($notas);
        $this->setFaltas($faltas);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        if(empty($nome) || !is_string($nome)) {
            throw new InvalidArgumentException('Nome inválido.');
        }
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade){
        if (!is_numeric($idade) || $idade < 0 || $idade > 150) {
            throw new InvalidArgumentException('Idade inválida.');
        }
        $this->idade = $idade;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf){
        if (empty($cpf) || !is_string($cpf)) {
            throw new InvalidArgumentException("CPF inválido.");
        }
        $this->cpf = $cpf;
    }

    public function getRa() {
        return $this->ra;
    }

    public function setRa($ra){
        $this->ra = $ra;
    }

    public function getNotas() {
        return $this->notas;
    }

    public function setNotas($notas){
        $this->notas = $notas;
    }

    public function getFaltas() {
        return $this->faltas;
    }

    public function setFaltas($faltas){
        $this->faltas = $faltas;
    }
}

class Professor {
    private $nome;
    private $idade;
    private $cpf;
    private $salarioPorAula;
    private $faltas;

    public function __construct($nome, $idade, $cpf, $salarioPorAula, $faltas) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setCpf($cpf);
        $this->setSalarioPorAula($salarioPorAula);
        $this->setFaltas($salarioPorAula);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        if(empty($nome) || !is_string($nome)) {
            throw new InvalidArgumentException('Nome inválido.');
        }
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade){
        if (!is_numeric($idade) || $idade < 0 || $idade > 150) {
            throw new InvalidArgumentException('Idade inválida.');
        }
        $this->idade = $idade;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf){
        if (empty($cpf) || !is_string($cpf)) {
            throw new InvalidArgumentException("CPF inválido.");
        }
        $this->cpf = $cpf;
    }

    public function getSalarioPorAula() {
        return $this->salarioPorAula;
    }

    public function setSalarioPorAula($salarioPorAula){
        $this->getSalarioPorAula = $salarioPorAula;
    }

    public function getFaltas() {
        return $this->faltas;
    }

    public function setFaltas($faltas){
        $this->falta = $faltas;
    }
}

class Bibliotecario{
    private $nome;
    private $idade;
    private $cpf;
    private $horarioDeTrabalho;

    public function __construct($nome, $idade, $cpf, $horarioDeTrabalho) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setCpf($cpf);
        $this->horarioDeTrabalho = $horarioDeTrabalho;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        if(empty($nome) || !is_string($nome)) {
            throw new InvalidArgumentException('Nome inválido.');
        }
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade){
        if (!is_numeric($idade) || $idade < 0 || $idade > 150) {
            throw new InvalidArgumentException('Idade inválida.');
        }
        $this->idade = $idade;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf){
        if (empty($cpf) || !is_string($cpf)) {
            throw new InvalidArgumentException("CPF inválido.");
        }
        $this->cpf = $cpf;
    }

    public function getHorarioDeTrabalho() {
        return $this->horarioDeTrabalho;
    }
}

class Escola {
    private $alunos = array();
    private $professores = array();
    private $bibliotecarios = array();

    public static $totalPessoas = 0;
    public static $totalAlunos = 0;
    public static $totalProfessores = 0;
    public static $totalBibliotecarios = 0;

    public function adicionarAluno($aluno) {
        if (!($aluno instanceof Aluno)) {
            throw new Exception("O objeto passado não é um aluno.");
        }
        $this->alunos[] = $aluno;
        self::$totalPessoas++;
        self::$totalAlunos++;
    }

    public function adicionarProfessor($professor) {
        if (!($professor instanceof Professor)) {
            throw new Exception("O objeto passado não é um professor.");
        }
        $this->professores[] = $professor;
        self::$totalPessoas++;
        self::$totalProfessores++;
    }

    public function adicionarBibliotecario($bibliotecario) {
        if (!($bibliotecario instanceof Bibliotecario)) {
            throw new Exception("O objeto passado não é um bibliotecário.");
        }
        $this->bibliotecarios[] = $bibliotecario;
        self::$totalPessoas++;
        self::$totalBibliotecarios++;
    }

    public function listarAlunos() {
        foreach ($this->alunos as $aluno) {
            echo "Nome: " . $aluno->getNome() . "<br>";
            echo "Idade: " . $aluno->getIdade() . "<br>";
            echo "CPF: " . $aluno->getCpf() . "<br>";
            echo "RA: " . $aluno->getRa() . "<br>";
            echo "Notas: " . implode(", ", $aluno->getNotas()) . "<br>";
            echo "Faltas: " . $aluno->getFaltas() . "<br>";
            echo "<br>";
        }
    }

    public function listarProfessores() {
        foreach ($this->professores as $professor) {
            echo "Nome: " . $professor->getNome() . "<br>";
            echo "Idade: " . $professor->getIdade() . "<br>";
            echo "CPF: " . $professor->getCpf() . "<br>";
            echo "Salário por aula: R$" . $professor->getSalarioPorAula() . "<br>";
            echo "Faltas: " . $professor->getFaltas() . "<br>";
            echo "<br>";
        }
    }

    public function listarBibliotecarios() {
        foreach ($this->bibliotecarios as $bibliotecario) {
            echo "Nome: " . $bibliotecario->getNome() . "<br>";
            echo "Idade: " . $bibliotecario->getIdade() . "<br>";
            echo "CPF: " . $bibliotecario->getCpf() . "<br>";
            echo "Horário de trabalho: " . $bibliotecario->getHorarioDeTrabalho() . "<br>";
            echo "<br>";
        }
    }
}   

    $aluno1 = new Aluno("João", 18, "123.456.789-00", "12345", [7.5, 8.0, 9.0], 2);
    $aluno2 = new Aluno("Maria", 19, "987.654.321-00", "54321", [6.0, 8.0, 7.0], 3);
    $aluno3 = new Aluno("Pedro", 20, "111.222.333-44", "67890", [10.0, 9.0, 8.0], 0);

    $professor1 = new Professor("José", 35, "111.222.333-44", 50.0, 2);
    $professor2 = new Professor("Ana", 42, "444.555.666-77", 60.0, 1);

    $bibliotecario1 = new Bibliotecario("Carlos", 28, "777.888.999-00", "08:00 - 17:00");

    $escola = new Escola();

    $escola->adicionarAluno($aluno1);
    $escola->adicionarAluno($aluno2);
    $escola->adicionarAluno($aluno3);

    $escola->adicionarProfessor($professor1);
    $escola->adicionarProfessor($professor2);

    
    $escola->adicionarBibliotecario($bibliotecario1);

    echo "----------- COLÉGIO INTEGRADO ------------ <br>";

    echo "Alunos: <br>";
    $escola->listarAlunos();

    echo "-------------------------------------<br>";

    echo "Professores: <br>";
    $escola->listarProfessores();

    echo "-------------------------------------<br>";

    echo "Bibliotecários: <br>";
    $escola->listarBibliotecarios();

    echo "-------------------------------------<br>";


?>

