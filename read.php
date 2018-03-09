<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=DojoCRUD', "root", "password");
    foreach($dbh->query('SELECT * from Article') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
