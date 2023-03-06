<?php

class Crud 
{
    private $conect;
    
    private $user;
    private $pass;
    private $mail;
    private $hood;
    private $st;
    private $num;
    private $comp;
    private $cnpj;

    function __construct($conn)
    {
        $this->conect = $conn;
    }

    public function setDados($user,$pass,$mail,$hood,$st,$num,$comp,$cnpj)
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->mail = $mail;
        $this->hood = $hood;
        $this->st = $st;
        $this->num = $num;
        $this->comp = $comp;
        $this->cnpj = $cnpj;

    }
    
    public function insertDados()
    {
        $sql = $this->conect->prepare("INSERT INTO usuarios(nome,senha,mail,bairro,rua,numero,complemento,cnpj)
                                    VALUES(?,?,?,?,?,?,?,?)");
        $sql->bindParam(1,$this->user);
        $sql->bindParam(2,$this->pass);
        $sql->bindParam(3,$this->mail);
        $sql->bindParam(4,$this->hood);
        $sql->bindParam(5,$this->st);
        $sql->bindParam(6,$this->num);
        $sql->bindParam(7,$this->comp);
        $sql->bindParam(8,$this->cnpj);

        if($sql->execute()){
            echo "Dados Enviados";
        }else{
            echo "Dados Não Enviados";
        }

    }

    public function readInfo($id = null)
    {
        if(isset($id)){
            $sql = $this->conect->prepare("SELECT * FROM usuarios WHERE id=?");

            $sql->bindValue(1,$id);

            $sql->execute();

            $result = $sql->fetch(PDO::FETCH_OBJ);

            return $result;
        } else {
           $this->getAll();
        } 
    }

    public function getAll()
    {

        $sql = $this->conect->query("SELECT * FROM usuarios");

        return $sql;
    }

    public function readInfoAll($nome = null)
    {
        if(isset($nome)){
            $sql = $this->conect->prepare("SELECT * FROM usuarios WHERE nome LIKE ?");

            $sql->bindValue(1,"%$nome%");

            $sql->execute();

            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }else{
            $this->getAll();
        }
    }

    public function update($id,$user,$pass,$mail,$hood,$st,$num,$comp,$cnpj)
    {
        $sql = $this->conect->prepare("UPDATE usuarios SET nome=?,senha=?,mail=?,bairro=?,rua=?,numero=?,
        complemento=?,cnpj=? WHERE id=?");

        $sql->bindValue(1,$user,PDO::PARAM_STR);
        $sql->bindValue(2,$pass,PDO::PARAM_STR);
        $sql->bindValue(3,$mail,PDO::PARAM_STR);
        $sql->bindValue(4,$hood,PDO::PARAM_STR);
        $sql->bindValue(5,$st,PDO::PARAM_STR);
        $sql->bindValue(6,$num,PDO::PARAM_STR);
        $sql->bindValue(7,$comp,PDO::PARAM_STR);
        $sql->bindValue(8,$cnpj,PDO::PARAM_STR);
        $sql->bindValue(9,$id,PDO::PARAM_STR);

        if($sql->execute()){
            echo "Registro Atualizado! <br> <a href='readAll.php'> Voltar </a>";
        }else{
            echo "Problemas ao tentar Atualizar registro! <br> <a href='readAll.php'> Voltar </a>";
        }

    }

    public function delete($id)
    {
        $sql = $this->conect->prepare("DELETE FROM usuarios WHERE id=?");

        $sql->bindValue(1,$id);

        $sql->execute();

        header("Location: readAllDelete.php");
    }

}
?>