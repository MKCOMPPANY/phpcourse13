<?php
 require_once './functions/helpers.php';
 require_once './functions/pdo_connection.php';
 if(isset($_GET['call_id'])&& $_GET['call_id']!=='')
 {
    global $pdo;
    $sql = "DELETE FROM  `call_numbers` WHERE id=?" ;
    $statement = $pdo->prepare($sql);
    $statement->execute([$_GET['call_id']]);
 }
 redirect('index.php');

?>
