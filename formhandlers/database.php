<?php 
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dgcodes_database', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $statement = $pdo->prepare('SELECT * FROM users_message ORDER BY date ASC');
// $statement->execute();
// $users = $statement->fetchAll(PDO::FETCH_ASSOC);

// $statement2 = $pdo->prepare('SELECT * FROM users_appointment ORDER BY date ASC');
// $statement2->execute();
// $usersAppointment = $statement->fetchAll(PDO::FETCH_ASSOC);

