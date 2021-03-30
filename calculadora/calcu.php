<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
       <title>Calculadora</title>
</head>
<body>
    <?php 
    
    function somaV ($num1, $num2){
        return $num1+$num2;
    }
    function subtraçãoV ($num1, $num2){
        return $num1-$num2;
    }
    function multiplicaçãoV ($num1, $num2){
        return $num1*$num2;
    }
    function divisãoV ($num1, $num2){
        if($num2==0){
            echo"Erro";
        }else{
        return $num1/$num2;
    }
    }
    $num1 = 42;
    $num2 = 5;

    echo"Digite o primeiro valor:<br /> $num1 <br />";
    
    echo"Digite o segundo valor:<br /> $num2 <br /><br />";
    $operacao = 1;
    switch($operacao){
        case 1: $res = somaV ($num1, $num2);
        $op = "soma";
        break;
        case 2: $res = subtraçãoV ($num1, $num2);
        $op = "subtração";
        break;
        case 3: $res = multiplicaçãoV ($num1, $num2);
        $op = "multiplicação";
        break;
        case 4: $res = divisãoV ($num1, $num2);
        $op = "divisão";
        break;
    }

    echo"Escolha a operação: <br / ><br /> 
    1- soma; <br />
    2- Subtração;<br />
    3- multiplicação;<br />
    4- divisão;<br /><br />";
    
    

    

    echo"operação escolhida: $op <br /><br />
     $num1 + $num2 = $res";

    
    ?>
</body>
</html>