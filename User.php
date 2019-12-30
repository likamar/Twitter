<?php

class User
{
    private $id;
    
    private $name;
    
    private $surname;
    
    private $email;
    
    private $password;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getSurname()
    {
        return $this->surname;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = filter_var($name, FILTER_SANITIZE_STRING);
        } else {
            throw new Exception('User name must be a string');
        }
        
    }
    
    public function setSurname($surname)
    {
        if (is_string($surname) && strlen($surname) > 1) {
            $this->surname = filter_var($surname, FILTER_SANITIZE_STRING);
        } else {
            throw new Exception('User surname must be a string');
        }
    }
    
    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new Exception('Invalid email');
        }
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
}

$user = new User();
$user->setEmail('marcin@wp.pl');
$user->setName('adam');
var_dump($user->getEmail());
var_dump($user->getName());