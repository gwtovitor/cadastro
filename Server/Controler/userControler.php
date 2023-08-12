<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
include_once("../Model/userModel.php");
include_once("../db/conexao.php");

$method = $_SERVER['REQUEST_METHOD'];
$page = $_POST["page"];

if ($method === 'POST') {

    if ($page === 'cadastrar') {
   
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $dataNascimento = $_POST["data-nascimento"];
        $sexo = $_POST["sexo"];
        $senha = $_POST["senha"];
        $user = new Usuario($nome, $email, $telefone, $dataNascimento, $sexo, $senha);
        $user->createUser();

       
    } elseif ($page === 'logar') {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $user = Usuario::createWithEmailAndSenha($email, $senha);
        $user->getUserByEmail($email, $senha);
       
    } elseif ($page === 'deletar') {
        $id = $_POST["id"]; 
        $user = Usuario::createUserID($id);
        $user->deleteUsers($id); 
    }
    
        
} elseif ($method === 'GET') {
    if ($page === 'listar') {
        require_once __DIR__ . '/Views/PlansView.php';
        echo '';
    } else {
        echo json_encode(['error' => 'Página Inválida']);
    }
} else {
    echo json_encode(['error' => 'Método de requisição não permitido.']);
}
?>
