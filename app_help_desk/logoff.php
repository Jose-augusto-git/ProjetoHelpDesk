<?php 

    session_start();//sempre que for trabalhar com sessão colocar session_start para ter acesso a variavel global

    /*
    echo '<pre>';
    print_r($_SESSION);//para verficar quais variaveis de sessão
    echo '</pre>';

    //encerramento do Login(sessão)

    //remover indices do array de sessão
    //unset();

    unset($_SESSION[]);// VERIFICA SE O INDICE EXISTE , TEM A INTELIGENCIA DE REMOVER APENAS SE  EXISTIR

    echo '<pre>';
    print_r($_SESSION);//para verficar quais variaveis de sessão
    echo '</pre>';
*/
    //destruir a variável de sessão
    //session_destroy();
    session_destroy();//SERÁ DESTRUIDO MAIS SOMENTE EM UMA PROXIMA REQUISÃO 
    //força um redirecionamento
    header('Location:index.php');

?>