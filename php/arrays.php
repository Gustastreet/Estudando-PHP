<?php
    //arrays simples
    $numeros = [5,1,4,6,76];
    $frutas = array('laranja', 'maçã', 'melancia');
    //print_r($numeros);
    //echo $frutas[1];
    //associate arrays é quando eu associo cada item ao número que eu quiser
    $cores = [
        1 => 'laranja',
        27=> 'preto',
        3 => 'branco'
    ];
    //echo$cores[27];
    //mas além disso também podemos associar valores ou strings a nomes
    $hex = [
        'vermelho' => '#f00',
        'azul' => '#0f0',
        'verde' => '#00f'
    ];
    //echo $hex['azul'];
    //muito normal database organizarem assim;

    $pessoas = [
        [
            'nome' => 'Gustavo',
            'idade' => '14',
            'gmail' => 'gustavolegal@gmail.com'
        ],
        [
            'nome' => 'Malu',
            'idade' => '20',
            'gmail' => 'malulegal@gmail.com'
        ],
        [
            'nome' => 'Liviane',
            'idade' => '45',
            'gmail' => 'Livianelegal@gmail.com'
        ],
        [
            'nome' => 'Thiago',
            'idade' => '40',
            'gmail' => 'thiagolegal@gmail.com'
        ]
        ];
        //essa array virou uma array multidimensional então agora eu posso chamar duas coisas
        //echo $pessoas[1]['idade'];
        //muitas vezes essas arrays associativas estarão em json ou vice versa
        //para isso só usar o json_encode
        //echo (json_encode($pessoas));
        //echo(json_decode($pessoas)); <= transforma json em associative array
?>