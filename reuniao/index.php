<html>
<head>
	<title>Reunioes </title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">

<?php
?>

</head>
<body>

<div class="container">
	<h1> Bem Vindo!!!</h1>
</div>

<?php
/*
$i = 1;
DO{
echo ++ $i;
}while ($i <= 10) ;
   the printed value would be
                   $i before the increment
                   (post-increment)


 example 2

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>

<?php*/
    function mostraConteudoDoArray($array){
        for ($i=0; $i < sizeof($array); $i++) {
            echo "Chave: " . $i . "Valor: " . $array[$i];
        }
    }
?>

</body>
</html>
