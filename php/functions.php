<?php
    function teste(){
        global $x;//tudo que é criado dentro da função não existe fora e vice versa a nao ser que adicione esse global e o nome da fução
        echo'print';
        $x = 10;
    
    }

    $subtract = function($num1, $num2){
        return $num1 - $num2;
    };
    

    $multiply = fn($num1, $num2) => $num1 * $num2; //arrow functions são para quando as funções só vão fazer uma linha de coisa, nesse caso só return, e ai o => indica que isso que a função vai retornar
    echo $multiply(4,10);

?>