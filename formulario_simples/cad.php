<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iai man</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado do processamento.</h1>
    </header>
    <main>
        <?php
        $name= $_GET["nome"] ??"sem nome";

        $sobrename= $_GET["sobrenome"]?? "sem sobrenome";

        echo "Parabéns você logou com sucesso $name $sobrename! Este é meu site.";
        
        // var_dump($_REQUEST);//$_REQUEST é uma super global que adiciona o $_get,_$_post e $_cookie.

        ?>

       <p> <a  href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>