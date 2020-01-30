<?php

// se tiver postado aqui no submit
if(isset($_POST['submit'])){
//    echo "Chegou Primeiro aqui \n";
// se tiver um arquivo na variavél $FILES 
//     if(isset($_FILES['arquivo'])){
// //  echo "\n Chegou Depois aqui /n";

//         // Se existir um arquivo na Variavel $_FILES com o nome tmp_nome mover 
//         // para pasta teste e renomear para arquivobla.txt
//             if(move_uploaded_file($_FILES['arquivo']['tmp_name'], 'teste/arquivobla.txt')){
//              // emitir uma mensagem com arquivo salvo com sucesso.
//                 echo "Arquivo Salvo com Sucesso";

//         }else{
//             echo "Arquivo Falhou";
//         }

//     }
    move_uploaded_file ($_FILES['arquivo']['tmp_name'], 'teste/outroarquivo.txt');
    var_dump($_POST);
    echo "Arquivo movido e Alterado para ";



}

?>