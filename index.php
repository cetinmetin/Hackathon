<?php 
    require_once 'connection.php';
    error_reporting(0);
    if($_SESSION['oturum']){
        echo "girdi";
        ?>
        <form  method="post" action="control.php">   
            <input type="submit" value="Çıkış Yap" name="logout" id="logout">
        </form>
    <?php
    }
    else{
        header('Location: login.php');
    }

    


?>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="assets/js/index.js"></script>


<button onclick="getName()"> Yorumlar </button>