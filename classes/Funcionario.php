<?php

class funcionario{
    private $collection;

    
    private $id;
    private $nome;
    private $endereco;
    private $sexo;
    private $dataNascimento;
    private $salario;
    private $cargo;
    private $crea;
    private $crm;

    function __construct(){
        $this->collection = (new MongoDB\Client)->empresa->funcionario;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setData($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function getData(){
        return $this->dataNascimento;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function setCrea($crea){
        $this->crea = $crea;
    }

    public function getCrea(){
        return $this->crea;
    }

    public function setCrm($crm){
        $this->crm = $crm;
    }

    public function getCrm(){
        return $this->crm;
    }

    public function index(){
        $this->listar();
    }

    public function listar(){
        $funcionarios = $this->collection->find();
        include HOME_DIR."view/paginas/funcionarios/index.php";
    }

    public function novo(){
        include HOME_DIR."view/paginas/funcionarios/form.php";
    }

    public function salvar(){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['gender'];
        $data = $_POST['date'];
        $salario = $_POST['salario'];
        $cargo = $_POST['cargo'];
        $crea = $_POST['crea'];
        $crm = $_POST['crm'];

        $insertOneResult = $this->collection->insertOne(array(
            'nome' => $nome,
            'endereco' => $endereco,
            'sexo' => $sexo,
            'data' => $data,
            'salario' => $salario,
            'cargo' => $cargo,
            'crea' => $crea,
            'crm' => $crm,
        ));
        
        $this->listar();
        
    }

    public function deletar($id){
        $deleteResult = $this->collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
        printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());
        $this->listar();
        
    }


}