<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=test_encomage_db;charset=utf8', 'root', '');
} catch (Exception $e) {
    $e->getMessage();
}

$str_json = json_decode($_POST['json'], true);
extract($str_json);

$query = "SELECT * FROM users WHERE {$where} LIKE '{$value}%'";

$response = $pdo->query($query);
$data = $response->fetchAll(PDO::FETCH_ASSOC);

foreach($data as $user) {
    echo "<tr>"
            . "<th>{$user['id']}</th>"
            . "<th>{$user['first_name']}</th>"
            . "<th>{$user['last_name']}</th>"
            . "<th>{$user['email']}</th>"
            . "<th>{$user['create_date']}</th>"
            . "<th>{$user['update_date']}</th>"
            . "<th><a href='edit-form.php?id={$user["id"]}'>EDIT</a></th>"
            . "</tr>";
}