<?php
 
$db =  $mysql = new mysqli("localhost", "php1", "senha", "php1");
 


if ($db->connect_errno) {
    echo "erro db" . $db -> connect_error;
    exit();
}

echo "sem erros";
?>