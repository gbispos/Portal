<?php
//inicia a conexão com dados informados
include "conexao.php";
session_start();
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
}
// $logado = $_SESSION['login'];
// function getClientes($conn){
//     $sql="SELECT cliente_cnpj, cliente_id, cliente_nome, cliente_telefone FROM clientes";
//     $result=$conn->query($sql);
//     return  $result;
// }
// function getClientebyID($conn, $num){
//     $sql="SELECT cliente_cnpj, cliente_id, cliente_nome, cliente_telefone FROM clientes where cliente_id = ".$num;
//     $result=$conn->query($sql);
//     return  $result;
// }
// function insertCliente($conn, $cnpjCliente, $nomeCliente, $telefoneCliente){
//     $sql="INSERT into clientes (cliente_cnpj, cliente_nome, cliente_telefone) " ;
//     $sql=$sql. " values ('".$cnpjCliente."', ";
//     $sql=$sql. "'".$nomeCliente."', ";
//     $sql=$sql."'". $telefoneCliente."')";
//     $result=$conn->query($sql);
// } 
// function updateCliente($conn, $cnpjCliente, $nomeCliente, $telefoneCliente, $idCliente){
//     $sql="UPDATE clientes " ;
//     $sql=$sql. " SET cliente_cnpj = '".$cnpjCliente."', ";
//     $sql=$sql. " SET cliente_nome = '".$nomeCliente."', ";
//     $sql=$sql. " SET cliente_telefone = " .$telefoneCliente. " ";    
//     $sql=$sql. " WHERE cliente_id = ".$idCliente;
//     $result=$conn->query($sql);
// }
// function deleteCliente($conn, $codContato){
//     $sql="delete from clientes " ;
//     $sql=$sql. " where cliente_id = ".$codContato;    
    
//     $result=$conn->query($sql);   
// } 
// function getContatos($conn){
//     $sql="SELECT c.contato_cliente, c.contato_id, c.contato_pessoa, p.pessoa_cpf, p.pessoa_email, p.pessoa_nome, cliente_cnpj FROM contatos c ";
//     $sql = $sql."inner join pessoas p on p.pessoa_id = c.contato_pessoa ";
//     $sql = $sql."inner join clientes cli on cli.cliente_id = c.contato_cliente ";
//     $result=$conn->query($sql);
//     return  $result;
// }
// function getContatosebyID($conn, $num){
//     $sql="SELECT c.contato_cliente, c.contato_id, c.contato_pessoa, p.pessoa_cpf, p.pessoa_email, p.pessoa_nome, cliente_cnpj FROM contatos c ";
//     $sql = $sql."inner join pessoas p on p.pessoa_id = c.contato_pessoa ";
//     $sql = $sql."inner join clientes cli on cli.cliente_id = c.contato_cliente where c.contato_id = ".$num;
//     $result=$conn->query($sql);
//     return  $result;
// }
// function insertContato($conn, $pessoa_cpf, $pessoa_nome, $pessoa_email, $codCliente){
//     $sql="insert into pessoas (pessoa_cpf, pessoa_nome, pessoa_email ) " ;
//     $sql=$sql. "values ('".$pessoa_cpf."', ";
//     $sql=$sql."'".$pessoa_nome."', ";
//     $sql=$sql."'".$pessoa_email."')";
//     $result = $conn->query($sql);    
//     $idPessoa = $conn->insert_id;
//     $sql="insert into contatos (contato_cliente, contato_pessoa) " ;
//     $sql=$sql. " values (".$codCliente.", ";
//     $sql=$sql. $idPessoa.")";
//     $result = $conn->query($sql);
// } 
// function updateContato($conn, $codCliente, $codPessoa, $idContato){
//     $sql="UPDATE contatos " ;
//     $sql=$sql. " SET contato_cliente = '".$codCliente."', ";
//     $sql=$sql. " SET contato_pessoa = " .$codPessoa. " ";    
//     $sql=$sql. " where contato_id = ".$idContato;
//     $result=$conn->query($sql);
// }
// function deleteContato($conn, $codContato){
//     $sql="delete from contatos " ;
//     $sql=$sql. " where contato_id = ".$codContato;  
    
//     $result=$conn->query($sql);   
// } 
?>