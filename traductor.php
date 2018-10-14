<?php
$numeroArab = @$_POST['numero'];
$numeroRomano = array();
echo $numeroArab;


$letras = ["I", "IV", "V", "IX", "X", "XL", "L", "XC", "C", "CD", "D", "CM", "M"];
$numeros = [1, 4, 5, 9, 10, 40, 50, 90, 100, 400, 500, 900, 1000];

if(isset($_POST['submit'])) {
    if($numeroArab <= 1000 && $numeroArab > 0){

        $i = 0;
        while($numeroArab > 0){

            $n = array_reverse($numeros);
            $l = array_reverse($letras);

            if(($n[$i] - $numeroArab) <= 0){
                $numeroArab = $numeroArab - $n[$i];
                array_push($numeroRomano, $l[$i]);
                $i = 0;
            }
            else{
                $i++;
            }

        }
        $resultado = implode("", $numeroRomano);
        echo $resultado;
        header("location: index.php?num=".$resultado);
    }
    else{
        header("location: index.php?num=error");
    }
   
} 
else {
    echo "xd";
}

?>