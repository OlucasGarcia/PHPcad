<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'minas');
define('NAME', 'phpcharles');

$conn = new mysqli(HOST, USERNAME,PASSWORD, NAME);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
