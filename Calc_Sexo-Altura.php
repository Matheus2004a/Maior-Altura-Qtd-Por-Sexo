<?php
    $altura = array($_POST['alturaUser1'],$_POST['alturaUser2'],$_POST['alturaUser3'],$_POST['alturaUser4'],$_POST['alturaUser5']);
    
    $sexo = array($_POST['sexoUser1'],$_POST['sexoUser2'],$_POST['sexoUser3'],$_POST['sexoUser4'],$_POST['sexoUser5']);

    $alturaMaior = 0;
    $qtdsexoMasculino = 0;
    $qtdsexoFeminino = 0;

    for($i = 0; $i < 10; $i++){
        if($sexo[$i] == "Masculino"){
            $qtdsexoMasculino += 1;
        }
        if($sexo[$i] == "Feminino"){
            $qtdsexoFeminino += 1;
        }
        if(isset($sexo[$i]) && empty($sexo[$i]) && isset($altura[$i]) && empty($altura[$i])){
            echo "Entre com algum sexo <br>";
            return;
        }
        if($altura[$i] >= $alturaMaior){
            $alturaMaior = $altura[$i];
            $sexoAltMaior = $sexo[$i];
        }
    }

    echo "Há $qtdsexoMasculino pessoas do sexo masculino e $qtdsexoFeminino pessoas do sexo feminino <br>";
    echo "A maior altura é: $alturaMaior metros <br>";
    echo "O sexo com a maior altura é: $sexoAltMaior";
?>