<?php

$arr = ["1" => array("nome" => 'Nani'), "2" => array("nome" => 'Ploop'), "3" => array("nome" => "PYPY")];
// foreach($arr as $item){
//     echo $item . PHP_EOL;
// }

// foreach($arr as $value){
//     foreach($value as $k => $v){
//         echo "$k = $v" . PHP_EOL;
//     }
// }

foreach($arr as $key => $value){
    echo "INdex = $key" . PHP_EOL;
    echo $value['nome'] . PHP_EOL;
}


// $arr1 =    Array
//     (
//         [0] => Array
//             (
//                 [0] => Array
//                     (
//                         [id_usuario] => 2
//                         [nome] => Lorrane
//                         [sobrenome] => Portilho
//                         [id_forma_pagamento] => 1
//                         [pagamento] => Pix
//                     ),

//                 [1] => Array
//                     (
//                         [id_usuario] => 2
//                         [nome] => Lorrane
//                         [sobrenome] => Portilho
//                         [id_forma_pagamento] => 4
//                         [pagamento] => Dinheiro
//                     )

//             ),

//         [1] => Array
//             (
//                 [0] => Array
//                     (
//                         [id_usuario] => 23
//                         [nome] => Danilo
//                         [sobrenome] => Lopes
//                         [id_forma_pagamento] => 1
//                         [pagamento] => Pix
//                     ),

//                 [1] => Array
//                     (
//                         [id_usuario] => 23
//                         [nome] => Danilo
//                         [sobrenome] => Lopes
//                         [id_forma_pagamento] => 2
//                         [pagamento] => Cartão de Crédito
//                     )

//                 [2] => Array
//                     (
//                         [id_usuario] => 23
//                         [nome] => Danilo
//                         [sobrenome] => Lopes
//                         [id_forma_pagamento] => 3
//                         [pagamento] => Cartão de Débito
//                     ),

//                 [3] => Array
//                     (
//                         [id_usuario] => 23
//                         [nome] => Danilo
//                         [sobrenome] => Lopes
//                         [id_forma_pagamento] => 4
//                         [pagamento] => Dinheiro
//                     )

//                     );