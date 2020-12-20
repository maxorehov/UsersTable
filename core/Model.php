<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace core;



class Model {
    
    protected $pdo;

    public function __construct() {
        $props = require_once 'config/connect_db.php';
        try {
            $this->pdo = new \PDO($props['host'], $props['login'], $props['pass'], $props['props']);
        } catch (Exception $e) {
            echo "Не удалось подключиться к базе данных" . $e->getMessage();
        }
        
    }
    
    public function getUsersInfo($query) {
        $response = $this->pdo->query($query);
        $data = $response->fetchAll();
        return $data;
    }
    
    public function getUserInfo($query) {
        $response = $this->pdo->query($query);
        $data = $response->fetch();
        return $data;
    }
    
    public function updateUserInfo($id, $name, $last_name, $email) {
        
        $query = "UPDATE users SET first_name=:name, last_name=:last_name, email=:email, update_date=NOW() where id=:id";
        try {
            $request = $this->pdo->prepare($query);
            $request->execute(['name' => $name, 'last_name' => $last_name, 'email' => $email, 'id' => $id]);
            $_SESSION['message'] = 'Информация о пользователе успешно обновлена!';
            header("Location: /edit-user?id=$id");
        } catch (Exception $e) {
            echo "Не удалось обновить данные " . $e->getMessage();
        }
    }
    
    public function addUser($name, $last_name, $email) {
        $query = "INSERT INTO users VALUES (NULL, :first_name, :last_name, :email, NOW(), NOW())";
        try {
            $responce = $this->pdo->prepare($query);
            $responce->execute(['first_name' => $name, 'last_name' => $last_name, 'email' => $email]);
            $_SESSION['message'] = 'Пользователь успешно добавлен!';
            header('Location: /add-user');
        } catch (Exception $e) {
            echo "Не удалось добавить нового пользователя" . $e->getMessage();
        }
    }
}
