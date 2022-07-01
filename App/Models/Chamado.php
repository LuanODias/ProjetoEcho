<?php

namespace App\Models;

use PDOException;

class Chamado extends Connection
{
    private $nome_table;

    function __construct()
    {
        $this->login_id = $_SESSION["usuario"]["id"];
        $this->nome_table = "chamados";
    }

    public function index($km_rodado=null,$funcionario_id=null,$veiculo_id=null)
    {
        $conn = $this->connect();
        $sql = "SELECT chamados.id,chamados.disponivel,chamados.km_rodado,chamados.data,veiculos.autonomia,veiculos.placa,funcionarios.nome,funcionarios.cpf
            FROM chamados
            JOIN veiculos ON (veiculos.id=chamados.veiculo_id) 
            JOIN funcionarios ON (funcionarios.id=chamados.funcionario_id) 
         WHERE chamados.`usuario_id`=$this->login_id";

        if(!empty($km_rodado)){
            $sql .=" AND km_rodado='$km_rodado'";
        }
        if(!empty($funcionario_id)){
            $sql .=" AND funcionario_id='$funcionario_id'";
        }
        if(!empty($veiculo_id)){
            $sql .=" AND veiculo_id='$veiculo_id'";
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if ($result == true) {
            return $result;
        }else{
            return false;
        }
    }

    public function novo()
    {
        if ($_POST) {
            try {
                $km_rodado = $_POST["km_rodado"];
                $funcionario_id = $_POST["funcionario_id"];
                $veiculo_id = $_POST["veiculo_id"];
                $data = date("Y-m-d");

                $conn = $this->connect();
                $sql = "INSERT INTO $this->nome_table (`km_rodado`,`funcionario_id`,veiculo_id,data,`usuario_id`) VALUES ('$km_rodado','$funcionario_id','$veiculo_id','$data',$this->login_id)";
                $stmt = $conn->prepare($sql);
                $sucesso = $stmt->execute();
                if (!$sucesso) {
                    return[
                        "msg_success"=>false,
                        "msg_erros"=>$stmt->errorInfo()
                    ];

                }else{
                    return[
                        "msg_success"=>true
                    ];
                }
            } catch (PDOException $e) {
                return[
                    "msg_success"=>false,
                    "msg_erros"=>$e->getMessage()
                ];
            }
        }
    }
    public function getById($id)
    {
        $conn = $this->connect();
        $sql = "select * from chamados where id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result == true) {
            return $result;
        }else{
            return false;
        }
    }
    public function update($id)
    {
        if ($_POST) {
            try {
                $km_rodado = $_POST["km_rodado"];
                $funcionario_id = $_POST["funcionario_id"];
                $veiculo_id = $_POST["veiculo_id"];
                $disponivel = $_POST["disponivel"];

                $conn = $this->connect();
                $sql = "UPDATE $this->nome_table SET km_rodado = '$km_rodado',funcionario_id = '$funcionario_id',veiculo_id='$veiculo_id',usuario_id=$this->login_id,   disponivel='$disponivel' WHERE (`id` = $id)";
                $stmt = $conn->prepare($sql);
                $sucesso = $stmt->execute();
                if (!$sucesso) {
                    return[
                        "msg_success"=>false,
                        "msg_erros"=>$stmt->errorInfo()
                    ];
                }else if($disponivel === "N" || $disponivel === ''){
                    $_SESSION["veiculoDisponivel"] == false;
                    $_SESSION["funcionarioDisponivel"] == false;
                    return[
                        "msg_success"=>true
                    ];
                }
                return true;
            } catch (PDOException $e) {
                return[
                    "msg_success"=>false,
                    "msg_erros"=>$e->getMessage()
                ];
            }
        }
    }
}
