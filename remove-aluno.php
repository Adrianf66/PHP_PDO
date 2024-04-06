<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$prepareStatment = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$prepareStatment->bindValue(1, 4, PDO::PARAM_INT);

var_dump($prepareStatment->execute());

$prepareStatment->bindValue(1, 5, PDO::PARAM_INT);
var_dump($prepareStatment->execute());