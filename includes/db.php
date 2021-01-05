<?php $dsn = "mysql:host=localhost; dbname=vegana";
    try {
        $pdo   = new PDO($dsn, 'root', '');

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>