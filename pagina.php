<?php
    //criação de variáveis
    $aluno = "Neverton";
    $idade = 78;
    $altura = 1.78;
    $situacao = true;


    if($idade>=80){
        echo "Seu Fim está próximo. <br>";
    }elseif($idade < 18){
        echo "Menor de idade. <br>";
    }elseif($idade<=78 && $idade >=70){
        echo "Coroa Acabado <br>";
    }else{
        echo "Viva la vida loca<br>";
    }



/* if($idade < 80 && $altura >= 1.50){
        echo "Convocado para Guerra. <br>";
    }else{
        echo "Escapou da Guerra. <br>";
    }/*


/*  if($idade >= 80){
        echo "Já se aposentou. <br>";
    }else{
        echo "Não pode se aposentar. <br>";
    }*/



    echo "<b>Nome do Estudante:</b> $aluno <br>";
    echo "Sua idade é " . $idade . " anos <br>";
    echo "Sua Altura é " . $altura . " metros <br>";
    echo "Status da matrícula: " . $situacao;


    //echo " <h1 id= 'titulo'> Olá World! </h1>";
    //isso é um comentário
    # isso é um comentário

    /*isso é um
    comentário*/

?>