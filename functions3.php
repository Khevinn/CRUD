<?php
 		$estudantes =  $_POST['nome'] . ',' . $_POST['email'] . ',' . $_POST['matricula']. ',' . $_POST['idade'] . "\n";
    $estudante = fopen('estudantes.csv', 'a');
    fwrite($estudante, $estudantes);
    header("location:estudante1.php"); 
?>


