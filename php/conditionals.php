<?php
    //condições são igual a do java
    //interessante!!!
    //$t = date("j"); função que passa data {F = mês do ano, j = dia do mes do ano}
    //echo date("j");
    //echo (date("j")<=20 ? "hoje é antes de 20" : "hoje é depois de 20");
    $Posts = ["Primeiro Post", "Segundo Post"];
    // o que ele faz ai é se existe um post posta ele, se não não faz nada
    //echo $Posts[2] ?? "error 12";//esse é um caso que ele não tem a condição, o código sempre só assume que é se existe algo ou não

    //função empty verifica se uma array ou qualquer coisa está vazia
    //quando tem muitos ifs e elses usa-se o switch que é o que vai fazer quando for cada coisa
    $corfav = 'verde';
    switch($corfav){
        case 'azul':
            echo'sua cor favorita é azul';
            break;
        case 'vermelho':
            echo'sua cor favorita é vermelho';
            break;
        default: //default é quando não é nenhum dos cases que tem
            echo'complicado';
        }

    






?>  
