<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
   
    <title>Mini Teste Vocacional de TI</title>
	<link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>
<main>

<h1>Resultado do Teste Vocacional</h1>

<?php

    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $interesses=$_POST['interesses'] ?? [];//?? [] verifica se o vetor possui valor, se não, cria um vazio

    echo"<strong>Nome:</strong> $nome<br>";
    echo"<strong>Idade:</strong> $idade<br>";

    echo"<strong><h2>Áreas de Interesse</h2></strong>";
	
    if($idade<16 & $idade>0){
            echo"O usuário ainda tem bastante
            tempo para conhecer novas áreas. <br>"; 
        }

    else if ($idade<=0){
            echo"Recém nascido e já se interessa pela TI. <br>";

    }

    else if (empty($interesses)){
                echo "Nenhuma área foi selecionada<br>";}
     
    else{
        
		for ($i=0; $i< count($interesses); $i ++){
                    echo "$interesses[$i]<br>";

        }
		
			    //foreach ($interesses as $interesse){
				//echo"$interesse <br>"; }
                // Faz a mesma coisa porém melhor
			    
              echo"<b><h2>Sugestões</h2></b>";

                 if (in_array("Programação", $interesses)){

                echo"Você pode gostar da carreira de Desenvolvedor<br>";

                }

                if (in_array("Redes",$interesses)){

             echo"Você pode gostar da carreira de Administrador de Redes<br>";
             }

              if (in_array("Banco",$interesses)){

             echo"Você pode gostar da carreira de DBA<br>";
                }

             if (in_array("Design",$interesses)){

                echo"Você pode gostar da carreira de Design de Interfaces<br>";
             }
    }
    
	?>

        <br><a href="index.html">Voltar para início</a>
</main>
</body>
</html>