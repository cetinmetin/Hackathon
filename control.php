<?php
require_once 'connection.php';
require_once 'control.php';
    if($_POST['login']){
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        if(($username==null) || ($password==null)) {
            $_SESSION['loginn']="Bos Alan bırakmayınız";
            header('Location: login.php');
        }

        $query = $db->query("SELECT * FROM users WHERE username='{$username}' && password='{$password}'",PDO::FETCH_ASSOC);

        if($say= $query -> rowCount() ){
            if($say >0 ){
                $_SESSION['oturum']=true;
                $_SESSION['username']=$username;
                header('Location: index.php');
            }
            else{
            $_SESSION['loginn']="Kullanıcı adı veya şifre yanlış";
            header('Location: login.php');
            }
                
            }
        
    }
    if($_POST['logout']){
        session_start();
        session_destroy();
        session_unset();
        unset($_SESSION['oturum']);
        header("Location:index.php");
    }

    if($_POST['adminkayit']){
        $username= $_POST['username'];
        $password = sha1($_POST['password']);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $state=1;
        $kontrol=1;

        $query = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
            foreach( $query as $row ){
                if($row['username'] == $_POST['username']) $kontrol=0;
            }
        }

        if($kontrol==1){
        $query = $db->exec("INSERT INTO users (username, password, email,ad,state)
        VALUES ('$username', '$password', '$email','$name',$state)");
        $_SESSION['adminkayitt'] = "admin kayit başarılı";
        header('Location: login.php');
        }
        else{
            $_SESSION['adminkayitt'] = "aynı kullanıcı adı mevcut";
            header('Location: login.php');
        }
    }
    if($_POST['akademikayit']){
        $username= $_POST['username'];
        $password = sha1($_POST['password']);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $state=2;
        $kontrol=1;
        $query = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
            foreach( $query as $row ){
                if($row['username'] == $_POST['username']) $kontrol=0;
            }
        }
        if($kontrol==1){
        $query = $db->exec("INSERT INTO users (username, password, email,ad,state)
        VALUES ('$username', '$password', '$email','$name',$state)");
        $_SESSION['akademikayitt'] = "akademi kayit başarılı";
        header('Location: login.php');
        }
        else{
            $_SESSION['akademikayitt'] = "aynı kullanıcı adı mevcut";
            header('Location: login.php');
        }
    }
    if($_POST['sektorkayit']){
        $username= $_POST['username'];
        $password = sha1($_POST['password']);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $state=3;
        $kontrol=1;
        $query = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
            foreach( $query as $row ){
                if($row['username'] == $_POST['username']) $kontrol=0;
            }
        }
        if($kontrol==1){
        $query = $db->exec("INSERT INTO users (username, password, email,ad,state)
        VALUES ('$username', '$password', '$email','$name',$state)");
        $_SESSION['sektorkayitt'] = "akademi kayit başarılı";
        header('Location: login.php');
        }
        else{
            $_SESSION['sektorkayitt'] = "aynı kullanıcı adı mevcut";
            header('Location: login.php');
        }
    }
?>