<!--Código para conectarse a la bbdd 'USERS'-->

<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'test');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".'users_foro', USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>