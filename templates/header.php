<?php include_once("config/url.php");
include_once("config/process.php");

//Limpa a mensagem
if(isset($_SESSION['msg'])){
    $msg = $_SESSION['msg']; 
    $_SESSION['msg'] = ''; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font awesome--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css --->
    <link rel="stylesheet" href="<?php $BASE_URL ?>assets/css/style.css">
    
    <title>Agenda de Contatos</title>
</head>
<body>
    <header> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php $BASE_URL ?> index.php">
    <img src="<?php $BASE_URL?>assets/img/logo.svg" alt="Agenda"> 
    </a>
    <div>
        <div class="navbar-nav">
            <a class="nav-link active" id="home-link" href="<?php $BASE_URL ?> index.php">Agenda</a>
            <a class="nav-link active" id="home-link" href="<?php $BASE_URL ?> create.php">Adicionar Contato</a>

        </div>
    </div>
</nav>
    </header>