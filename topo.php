<?php
    echo "<header>";

    if(empty($_SESSION['user'])){
        echo  "<a href = 'user-login.php'> Entrar </a>";   
    }else{
        echo "Olá, ".$_SESSION['user']." |" ; 
        echo "<span><a href = 'user-edit.php'>Editar meus dados </a></span> |";
    }
    if(is_admin()){
        echo "<span><a href = 'user-new.php'>novo usuário </a> </span> |";
        echo "novo  jogo |";
        echo "<a href = 'user-logout.php'> Sair |<a/>";
    }else if(is_editor() ){
        echo "<a href = 'user-logout.php'> Sair |<a/>";
    }

    
    echo "</header>";
?>