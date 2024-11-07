<?php
    /*for($x = 0; $x<=10; $x++){
        echo 'your number is ' . $x . '<br>';//<br> quebra a linha, colocar no final das frases que eu quiser que ele quebre a linha para outra
        da pra pegar o tanto de coisa que tem numa array escrevendo count(nome da array)
        
    }*/
    $Posts = ['First Post', 'Second Post', 'Third Post'];
    /*foreach($Posts as $Post){ aqui ele diz que todos os valores de posts vao ser chamados de post, isso é como um parametro numa função
        echo $Post;
    }*/
    /*foreach($Posts as $index=>$Post){//aqui ele diz que todos os objetos de Posts será post e que o indice/numeração deles será chamadod de index a represetnação index=>post é a forma de representar indice e objeto 
        echo $index + 1 . ' - ' . $Post . '<br>';
    }*/ 
    $pessoas = [
        'g@gmail.com' => 'Gustavo',
        'm@gmail.com' => 'Malu',
        'l@gmail.com' => 'Liviane',
        't@gmail.com' => 'Thiago'
    ];
    foreach($pessoas as $key=> $pessoa){
        echo"$key - $pessoa <br>";

    }
?>