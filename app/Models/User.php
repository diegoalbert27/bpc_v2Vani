<?php

namespace App\Models;

use App\Core\baseModel;

class User extends baseModel
{
    private $id;
    private $user;
    private $role;
    private $username;
    private $password;
    private $phone;
    private $email;
    private $enabled;
    protected $table = 'users';

    public function __construct(array $user = null)
    {
        if (is_array($user)) {
            $this->id = $user['id'];
            $this->user = $user['user'];
            $this->role = $user['role'];
            $this->username = $user['username'];
            $this->password = $user['password'];
            $this->phone = $user['phone'];
            $this->email = $user['email'];
            $this->enabled = $user['enabled'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (user, role, username, password, phone, email, enabled) VALUES (:user, :role, :username, :password, :phone, :email, :enabled)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':user', $this->user);
        $stmt->bindParam(':role', $this->role);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':phone', $this->phone);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':enabled', $this->enabled);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET user = :user, role = :role, username = :username, password = :password, phone = :phone, email = :email, enabled = :enabled WHERE id = :id";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':user', $this->user);
        $stmt->bindParam(':role', $this->role);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':phone', $this->phone);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':enabled', $this->enabled);

        return $stmt->execute();
    }
}
