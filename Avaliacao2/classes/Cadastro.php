<?php

class Cadastro {
    private $conn;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="vagas";

    try {
        $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch(PDOException $e)
        {
        echo "A conexão falhou: " . $e->getMessage();
        }

    }

    public function cadastrarVaga($nome_empresa, $numero_whatsapp, $email_contato, $descritivo_vaga, $curso){
        try {
            $sql = "INSERT INTO vagas (nome_empresa, numero_whatsapp, email_contato, descritivo_vaga, curso)
            VALUES ('$nome_empresa', '$numero_whatsapp', '$email_contato', '$descritivo_vaga', '$curso')";
            $this->conn->exec($sql);

            echo "Cadastro realizado com sucesso";
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
    }

    public function removerVaga($id){
        try {
            $sql = "DELETE FROM vagas WHERE id=('$id')";
            $this->conn->exec($sql);

            echo "Vaga removida com sucesso";
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
    }

    public function listarVaga(){
        try {
            $sql = "SELECT * FROM vagas";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        
        $stmt = $this->conn->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['id']. "  -  " .$row['nome_empresa']. "  -  " .$row['numero_whatsapp']. "  -  " .$row['email_contato']. "  -  " .$row['descritivo_vaga']."<br/>\n";
        }    
    }

    public function __destruct(){
        $this->conn = null;
    }
}
?>