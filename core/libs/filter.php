<?php
$pdo = new PDO(
        'mysql:host=localhost;dbname=test_encomage_db;charset=utf8',
        'root',
        '');
$cond = file_get_contents('php://input');
$query = "SELECT * FROM users ORDER BY $cond";

try{
    $response = $pdo->query($query);
    $users = $response->fetchAll();
} catch (Exception $e) {
    $e->getMessage();
}

foreach ($users as $user) {
    echo "<tr>"
            . "<th>{$user['id']}</th>"
            . "<th>{$user['first_name']}</th>"
            . "<th>{$user['last_name']}</th>"
            . "<th>{$user['email']}</th>"
            . "<th>{$user['create_date']}</th>"
            . "<th>{$user['update_date']}</th>"
            . "<th><a href='edit-user?id={$user["id"]}'>EDIT</a></th>"
            . "</tr>";
       
}