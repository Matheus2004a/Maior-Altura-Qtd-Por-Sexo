<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo maior altura e sexo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    $altura = array($_POST['alturaUser1'], $_POST['alturaUser2'], $_POST['alturaUser3'], $_POST['alturaUser4'], $_POST['alturaUser5']);

    $sexo = array($_POST['sexoUser1'], $_POST['sexoUser2'], $_POST['sexoUser3'], $_POST['sexoUser4'], $_POST['sexoUser5']);

    for ($i = 0; $i < count($altura); $i++) {
        if ($sexo[$i] == "Masculino") {
            $qtdsexoMasculino += 1;
        }
        if ($sexo[$i] == "Feminino") {
            $qtdsexoFeminino += 1;
        }
        if (empty($sexo[$i]) && empty($altura[$i])) {
            echo "Entre com algum sexo <br>";
            return;
        }
        if ($altura[$i] >= $alturaMaior) {
            $alturaMaior = $altura[$i];
            $sexoAltMaior = $sexo[$i];
        }
    }

    echo "Há $qtdsexoMasculino pessoas do sexo masculino e $qtdsexoFeminino pessoas do sexo feminino <br>";
    echo "A maior altura é: $alturaMaior metros <br>";
    echo "O sexo com a maior altura é: $sexoAltMaior";
    ?>
</body>

</html>