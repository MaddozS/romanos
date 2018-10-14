<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>asdasdd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Pont tu número</h1>
    <form action="traductor.php" method="post">
        <input type="text" name="numero">
        <button type="submit" name="submit">Traducir</button>
    </form>
    <div>
        <p>Tu número en romanos es: </p>
        <p>
            <?php
                $numeroRomano = @$_GET['num'];
                if(!empty($numeroRomano)){
                    if ($numeroRomano == "error"){
                        echo "El número proporcionado no está entre 0 a 1000";
                    }
                    else{
                        echo $numeroRomano;
                    }
                }
            ?>
        </p>
    </div>
</body>
</html>