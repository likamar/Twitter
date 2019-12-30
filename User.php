<?php

class User
{
    private $id;
    
    private $name;
    
    private $surname;
    
    private $email;
    
    private $password;
    
    public function __construct($name, $surname, $email, $password)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setEmail($email);
        $this->setPassword($password);
    }
    
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
        $options = ['cost' => 11];
        if (is_string($password) && strlen($password) >= 8) {
            $password = filter_var($password, FILTER_SANITIZE_STRING);
            $this->password = password_hash($password, PASSWORD_BCRYPT, $options);
        } else {
            throw new Exception('Password must consist at least of 8 chars');
        }
    }
}

$user = new User('marcin', 'kowalski', 'mkowalski@o2.com', 'Alibaba12!');
var_dump($user);
//$user->setEmail('marcin@wp.pl');
//$user->setName('adam');
//$user->setPassword('Alibaba12!');
//var_dump($user->getEmail());
//var_dump($user->getName());
//var_dump($user->getPassword());