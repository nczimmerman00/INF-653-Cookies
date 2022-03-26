<?php 
//$dsn = 'mysql:host=localhost;dbname=zippyusedautos';
//$username = 'mgs_user';
//$password = 'pa55word';
$dsn = "mysql:host=localhost; port=3307; dbname=zippyusedautos";
$username = 'root';

try{
    $db = new PDO($dsn, $username);
    //$db = new PDO($dsn, $username, $password);
}catch (PDOException $e){
    $error = 'Database Error: ';
    $error .= $e->getMessage();
    include('../view/error.php');
exit();
}

?>