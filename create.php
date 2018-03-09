<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=DojoCRUD', "root", "password");
    $dbh->exec("INSERT INTO Article (title, content) VALUES ('chaussettes', 'elles sont moches');");
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
