<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . 'banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, "Sabrina Peres",
    new DateTimeImmutable('2001-02-22'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (? , ?);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2,$student->birthDate()->format('Y-m-d'));
if ($statement->execute()) {
    echo "Aluno inserido";
}
exit();

var_dump($pdo->exec($sqlInsert));