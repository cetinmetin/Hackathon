<?php
require_once 'connection.php';

$query = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);

error_reporting(0);

session_destroy();




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/2.0.1/normalize.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href="assets/css/main.css" rel="stylesheet" />
    
</head>
<body>
  <div class="tabbed">
    <input type="radio" name="tabs" id="tab-nav-1" checked >
    <label for="tab-nav-1">Login</label>
    <input type="radio" name="tabs" id="tab-nav-2" <?php if($_SESSION['adminkayitt']) echo 'checked';  ?> >
    <label for="tab-nav-2">Admin Kayıt Ol</label>
    <input type="radio" name="tabs" id="tab-nav-3" <?php if($_SESSION['akademikayitt']) echo 'checked';  ?>>
    <label for="tab-nav-3">Akademi Kayıt Ol</label>
    <input type="radio" name="tabs" id="tab-nav-4" <?php if($_SESSION['sektorkayitt']) echo 'checked';  ?>>
    <label for="tab-nav-4">Sektör Kayıt Ol</label>
    <div class="tabs">
      <div>
          <h2>Login <small><?php if($_SESSION['loginn']!="") echo $_SESSION['loginn']; ?></small></h2>
            <div class="">
                <form method="post" action="control.php">
                    <div style="padding:8px">    
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="inputText" />
                    </div>
                    <div style="padding:8px">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="inputText" />
                    </div>
                    <div style="padding:8px">
                    <input type="submit" value="Giriş Yap" name="login" id="login">
                    </div>
                </form>
            </div>
    </div>
    <div>
          <h2>Admin Kayıt Ol <small> <?php if($_SESSION['adminkayitt']!="") echo $_SESSION['adminkayitt']; ?> </small> </h2>
            <div class="">
                <form method="post" action="control.php">
                <div style="padding:8px">    
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="inputText" />
                </div>
                <div style="padding:8px">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="inputText" />
                </div>
                <div style="padding:8px">
                    <label for="name">Ad</label>
                    <input type="text" name="name" id="name" class="inputText" />
                </div>
                <div style="padding:8px">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="inputText" />
                </div>
                <div style="padding:8px">
                <input type="submit" value="Kayıt Ol" name="adminkayit" id="adminkayit">
                </div>
                </form>
            </div>
    </div>
      <div>
      <h2>Akademi Kayıt Ol <small> <?php if($_SESSION['akademikayitt']!="") echo $_SESSION['akademikayitt']; ?> </small></h2>
            <div class="">
                <form method="post" action="control.php">
                <div style="padding:8px">    
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="inputText" />
                </div>
                <div style="padding:8px">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="inputText" />
                </div>
                <div style="padding:8px">
                    <label for="name">Ad</label>
                    <input type="text" name="name" id="name" class="inputText" />
                </div>
                <div style="padding:8px">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="inputText" />
                </div>
                <div style="padding:8px">
                <input type="submit" value="Kayıt Ol" name="akademikayit" id="akademikayit">
                </div>
                </form>
            </div>
      </div>
      <div>
      <div class="">
          <h2>Sektör Kayıt Ol <small> <?php if($_SESSION['sektorkayitt']!="") echo $_SESSION['sektorkayitt']; ?> </small></h2>
                <form method="post" action="control.php">
                <div style="padding:8px">    
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="inputText" />
                </div>
                <div style="padding:8px">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="inputText" />
                </div>
                <div style="padding:8px">
                    <label for="name">Ad</label>
                    <input type="text" name="name" id="name" class="inputText" />
                </div>
                <div style="padding:8px">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="inputText" />
                </div>
                <div style="padding:8px">
                <input type="submit" value="Giriş Yap" name="sektorkayit" id="sektorkayit">
                </div>
                </form>
            </div>
      </div>
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>
</body>
</html>