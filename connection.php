<?php
session_start();
try {
     $db = new PDO("mysql:host=localhost;dbname=hackathon", "root", "");
     $db->query("SET CHARACTER SET utf8mb4");

} catch ( PDOException $e ){
     print $e->getMessage();
}
?>