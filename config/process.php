<?php

session_start();

require_once("conexao.php");
require_once("url.php");

$data = $_POST;

//Modificações no banco
if (!empty($data)) {

// print_r($data); 

// Criar contato 

if ($data["type"] === "create") {

    $name = $data['name'];
    $phone = $data['phone'];
    $observations = $data['observations'];

    $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observations", $observations);

    try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato criado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    
    } else if ($data['type'] === "edit") {

        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];
        $id = $data["id"];

        $query = "UPDATE contacts
              SET name = :name, phone = :phone, observations = :observations
              WHERE id  = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";
        
          } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
          }

        } else if($data["type"] === "delete") {

            $id = $data["id"];
      
            $query = "DELETE FROM contacts WHERE id = :id";
      
            $stmt = $conn->prepare($query);
      
            $stmt->bindParam(":id", $id);
            
            try {

                $stmt->execute();
                $_SESSION["msg"] = "Contato removido com sucesso!";
            
              } catch(PDOException $e) {
                // erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
              }
        
            }      
      

    //Redirecione para home

    header("location:" . $BASE_URL . "../");

    //Seleção de dados
} else {

    $id;

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }

    //Retorna apenas 1 contato

    if (!empty($id)) {

        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $contact = $stmt->fetch();
    } else {

        //Retorna Todos os Contatos

        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}

//Fechando a conexão


