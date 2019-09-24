<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Estudante</title>
  <link rel="stylesheet">
   
</head>
<body>
  <style>
  

    body{
     display: flex;
     justify-content: center;
     align-items: left;
     /*min-height: 70px;*/
      /*background-color: yellow;*/
    }
  table{text-align:center;
        font-size: 150%; 
        width:80%;
}
  tr:nth-child(odd){
    background:#B6E3F3;
}
  tr:nth-child(even){
    background:#09BC13;
    
  }
  div{
  
  height: 50px;
  width: 80px;

  }

  </style>

  
<?php
    $estudantes = file('estudantes.csv');
    for($i = 0; $i < sizeof($estudantes); $i++) {
        $estudantes[$i] = explode(",", $estudantes[$i]);
    }
?>


  <form action="functions3.php" method="POST">
      <legend><strong>Cadastro de Usuários</strong></legend>
        <div>
        <input type="text"  name="nome" placeholder="Nome">
<input type="email" name="email" id="email" placeholder="Ex: creyton@email.com">
<input type="number" name="matricula" id="matricula" placeholder="Ex: 0014955">  
        
      <input type="number" name="idade" placeholder="Idade">




      <input type="submit" value="Inserir">
    </div>
  </form>



</body>

</html>
