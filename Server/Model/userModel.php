<?php

class Usuario {
    
    private $nome;
    private $email;
    private $telefone;
    private $dataNascimento;
    private $sexo;
    private $senha;


    public function __construct($nome, $email, $telefone, $dataNascimento, $sexo, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
        $this->sexo = $sexo;
        $this->senha = $senha;
    }
    


    public function getAllUsers(){
       
    }
    public function createUser() {
        include_once("../db/conexao.php");
        if ($connex->connect_error) {
            die("Erro na conexão com o banco de dados: " . $connex->connect_error);
        }

        // Preparar e executar a query de inserção
        $stmt = $connex->prepare("INSERT INTO usuarios (nome, email, telefone, data_nascimento, sexo, senha) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss", $this->nome, $this->email, $this->telefone, $this->dataNascimento, $this->sexo, $this->senha);

        if ($stmt->execute()) {
            echo "Usuário inserido com sucesso!";
        } else {
            echo "Erro ao inserir o usuário: " . $stmt->error;
        }

        $stmt->close();
        $connex->close();
    }
    public function getUserById($id) {
        
    }

    public function updateUsers($id){
       
    }
    public function deleteUsers($id){
       
    }
}
?>