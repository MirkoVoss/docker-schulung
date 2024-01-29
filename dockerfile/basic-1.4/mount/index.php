<?php
echo "Das ist der Coole " . getenv('AUSGABE') . " <br>";
$statement = 'CREATE TABLE authors(
  author_id   INT AUTO_INCREMENT,
        first_name  VARCHAR(100) NOT NULL,
        middle_name VARCHAR(50) NULL,
        last_name   VARCHAR(100) NULL,
        PRIMARY KEY(author_id)
    )';
$db = new PDO('mysql:host=mysql;port=3306;dbname=test', 'test_user', 'password');
$db->exec($statement)

?>
