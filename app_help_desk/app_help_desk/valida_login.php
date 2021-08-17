<?php
    //Restringindo paginas que não são permitidas
    session_start();


    //VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');


    //RELAÇÃO DE USUARIO COM O SISTEMA
    $usuarios_app = array(
        // USUARIOS CADASTRADOS NO APP
        array('id' => 1,'email' => 'admin@admin.com', 'senha' => '123456', 'perfil_id' => 1),
        array('id'=>  2,'email' => 'admin2@admin.com', 'senha' => '123456', 'perfil_id' => 1),

        array('id' => 3,'email' => 'user@admin.com', 'senha' => '123456', 'perfil_id' => 2),
        array('id' => 4,'email' => 'user2@admin.com', 'senha' => '123456', 'perfil_id' => 2),
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
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }
    

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
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