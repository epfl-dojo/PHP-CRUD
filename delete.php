<?php
$id = $_GET['id'];
try {
    $dbh = new PDO('mysql:host=localhost;dbname=DojoCRUD', "root", "password");
    if (isset($id)) {
      $dbh->exec("DELETE FROM Article WHERE id = $id;");
    }
    else {
      echo "No id was found !";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
