<?php
$host = $_ENV['HOST'];
$user = $_ENV['USER'];
$password = $_ENV['PASSWORD'];
$db_name = $_ENV['NAME'];
$port = $_ENV['PORT'];

$db = new mysqli($host, $user, $password, $db_name, strlen($port) === 0 ? null : $port);
$db->
query("CREATE TABLE IF NOT EXISTS 
product(id INT AUTO_INCREMENT PRIMARY KEY, product VARCHAR(255));");

function insert($name) {
  global $db;
  $db->query("INSERT INTO product(product) VALUES ('$name')");
}

function getData () {
  global $db;
  return $db->query("SELECT * FROM product;");
}