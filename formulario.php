<?php

if(isset($_POST['submit']))
{
  // print_r('Nome: ' . $_POST['nome']);
  // print_r('<br>');
  // print_r('Email: ' . $_POST['email']);
  // print_r('<br>');
  // print_r('Telefone: ' . $_POST['telefone']);
  // print_r('<br>');
  // print_r('Sexo: ' . $_POST['genero']);
  // print_r('<br>');
  // print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
  // print_r('<br>');
  // print_r('Cidade: ' . $_POST['cidade']);
  // print_r('<br>');
  // print_r('Estado: ' . $_POST['estado']);
  // print_r('<br>');
  // print_r('Endereço: ' . $_POST['endereco']);
  // print_r('<br>');

  include_once('config.php');
  
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['genero'];
  $data_nasc = $_POST['data_nascimento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $endereco = $_POST['endereco'];

  $result = mysqli_query($conexao, "INSERT INTO users (nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
  VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | FG</title>
    <style>
        body{
            font-family: Arial;
            background-image: linear-gradient(to right,#be00fd, #ffcc00)
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 120, 0.6);
            padding: 15px;
            border-radius: 17px;
            width: 23%;
            color: white;
        }
        fieldset{
            border: 1px solid rgb(183, 255, 0);
            padding: 10px;
        }
        legend{
            border: 1px solid rgb(183, 255, 0);
            padding: 10px;
            text-align: center;
            background-color: rgb(183, 255, 0);
            border-radius: 10px;
            color: black;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            height: 10%;
            letter-spacing: 2px;
        }
        #data_nascimento{
          border: none;
          padding: 8px;
          border-radius: 10px;
          outline: none;   
          font-size: 15px;    
        }
        #submit{
          width: 100%;
          padding: 10px;
          border: none;
          border-radius: 10px;
          font-size: 15px;
          cursor: pointer;

        }
        #submit:hover{
        background-color: #d8d7d7;
        }
    </style>
</head>
<body>
<div class="box">
    <form action="formulario.php" method="post">
        <fieldset>
            <legend><b>Formulário de Clientes</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" placeholder="Nome completo" required>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" placeholder="E-mail" required>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="telefone" id="telefone" class="inputUser" placeholder="Telefone" required>
            </div>
               <br><br>
            <p>Sexo:</p>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                  <label for="masculino">Masculino</label>
                  <br>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                  <label for="feminino">Feminino</label>
                  <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                  <label for="outro">Outro</label>
            <br><br>
            <div class="inputBox">
                    <label for="data_nascimento">Data de Nascimento:</label>
                      <input type="date" name="data_nascimento" id="data_nascimento" required>
            </div>
              <br><br>
            <div class="inputBox">
                  <input type="text" name="estado" id="estado" class="inputUser" placeholder="Estado" required>
            </div>
              <br><br>
              <div class="inputBox">
                  <input type="text" name="cidade" id="cidade" class="inputUser" placeholder="Cidade" required>
            </div>
              <br><br>
              <div class="inputBox">
                  <input type="text" name="endereco" id="endereco" class="inputUser" placeholder="Endereço" required>
            </div>
              <br><br>
              <input type="submit" name="submit" id="submit">
                
            </fieldset>
    </form>
</div>
</body>
</html>