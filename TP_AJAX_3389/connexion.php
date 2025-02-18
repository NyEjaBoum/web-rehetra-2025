<?php
// $bdd = mysqli_connect('localhost', 'root', '', 'projet_nombre');

// $bdd = mysqli_connect('192.168.2.56', 'ETU003389', 'u803RF8V', 'db_s2_ETU003389');

$host='localhost';
$dbname='projet_nombre';
$root='root';

try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $root , '');
} catch (Throwable $th) {
    echo "erreur";
}

?>