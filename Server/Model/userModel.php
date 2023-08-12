<?php

class Usuario
{

    private $nome;
    private $email;
    private $telefone;
    private $dataNascimento;
    private $sexo;
    private $senha;

    public function __construct($nome, $email, $telefone, $dataNascimento, $sexo, $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
        $this->sexo = $sexo;
        $this->senha = $senha;
    }
    public static function createWithEmailAndSenha($email, $senha)
    {
        $instance = new self('', $email, '', '', '', $senha);
        return $instance;
    }
    public static function createUserID($id)
    {
        $instance = new self($id, '', '', '', '', '');
        return $instance;
    }



    public function getAllUsers()
    {

    }
    public function createUser()
    {
        include("../db/conexao.php");
        $nome = $this->nome;
        $email = $this->email;
        $telefone = $this->telefone;
        $dataNascimento = $this->dataNascimento;
        $sexo = $this->sexo;
        $senha = $this->senha;

        if ($connex->connect_error) {
            die("Erro na conexão com o banco de dados: " . $connex->connect_error);
        }

        $query = "SELECT id FROM usuarios WHERE email = ?";
        $stmt = $connex->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "O email já está em uso. Não é possível criar o usuário.";
        } else {

            $stmt = $connex->prepare("INSERT INTO usuarios (nome, email, telefone, data_nascimento, sexo, senha) VALUES (?, ?, ?, ?, ?, ?)");
            $senhaHash = password_hash($this->senha, PASSWORD_DEFAULT);

            $stmt->bind_param("ssisss", $nome, $email, $telefone, $dataNascimento, $sexo, $senhaHash);

            if ($stmt->execute()) {
                echo "Usuário inserido com sucesso!";
            } else {
                echo "Erro ao inserir o usuário: " . $stmt->error;
            }
        }
        $stmt->close();
        $connex->close();

    }
    public function getUserByEmail($email, $senha)
    {
        include("../db/conexao.php");

        if ($connex->connect_error) {
            die("Erro na conexão com o banco de dados: " . $connex->connect_error);
        }


        $query = "SELECT id, nome, email, telefone, sexo, senha FROM usuarios WHERE email = ?";
        $stmt = $connex->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($id, $nome, $emailUsuario, $telefone, $sexo, $senhaHash);
        $stmt->fetch();
        $stmt->close();

        if (password_verify($senha, $senhaHash)) {
            // Definir variáveis para os dados do usuário
            $nomeUsuario = $nome;
            $emailUsuario = $emailUsuario;
            $telefoneUsuario = $telefone;
            $sexoUsuario = $sexo;
            $id = $id;


            include_once("../../Public/Pages/logado.php");
            exit();
        } else {
            echo "Credenciais inválidas. Não é possível fazer login.";
        }
    }

    public function updateUsers($id)
    {

    }
    public function deleteUsers($id)
    {
        include("../db/conexao.php");
    
        if ($connex->connect_error) {
            die("Erro na conexão com o banco de dados: " . $connex->connect_error);
        }
        
        $query = "DELETE FROM usuarios WHERE id = ?";
        $stmt = $connex->prepare($query);
        $stmt->bind_param("i", $id); // Supondo que 'id' seja um campo numérico (INT)
        
        if ($stmt->execute()) {
            echo "Usuário deletado com sucesso!";
        } else {
            echo "Erro ao deletar o usuário: " . $stmt->error;
        }
    
        $stmt->close();
    }
    
}
?>