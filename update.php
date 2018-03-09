 <?php
 $id = $_GET['id'];
try {
    $dbh = new PDO('mysql:host=localhost;dbname=DojoCRUD', "root", "password");
    if(isset($id)){
      $dbh->exec("UPDATE Article SET title = 'Test', content = 'Tout est different' WHERE id=$id;");
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
