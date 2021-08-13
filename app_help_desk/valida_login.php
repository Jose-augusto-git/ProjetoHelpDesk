<?php
    //Restringindo paginas que não são permitidas
    session_start();


    //VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
    $usuario_autenticado = false;


    //RELAÇÃO DE USUARIO COM O SISTEMA
    $usuarios_app = array(
        // USUARIOS CADASTRADOS NO APP
        array('email' => 'admin@admin.com', 'senha' => '123456'),
        array('email' => 'admin2@admin.com', 'senha' => 'abcde'),
    );

    /*
    //DEGUB
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';

    */

    //COMPARAÇÃO COM OS DADOS PASSADO ATRAVES DO METODO POST COM OS USUARIOS CADASTRADOS NO ARRAY

    foreach ($usuarios_app as $user){

        

       //verifica se os dados são iguais e autenticar o usuario

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;

        }
    }
    

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
    }else{
        //INFORMA QUE O USUÁRIO OU SENHA ESTA INVALIDO
        //header espera uma string com o destino para ser encaminhado
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
        //echo 'Erro na autenticação do usuário';
    }

    //$_GET SUPER GLOBAL
     
    /*
    print_r($_GET);

    echo '<br>';
    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senha'];

    */

    //$_POST SUPER GLOBAL

    /*
    print_r($_POST);

    echo '<br>';
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['senha'];

    */

?>