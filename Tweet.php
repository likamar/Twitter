<?php

class Tweet
{
    private $id;
    
    private $userId;
    
    private $tweetBody;
    
    private $creationDate;
    
    public function __construct($tweetBody)
    {
        $this->setTweetBody($tweetBody);
        $this->setCreationDate();
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getUserId()
    {
        return $this->userId;
    }
    
    public function getTweetBody()
    {
        return $this->tweetBody;
    }
    
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    
    public function setTweetBody($tweetBody)
    {
        $this->tweetBody = filter_var($tweetBody, FILTER_SANITIZE_STRING);
    }
    
    public function setCreationDate()
    {
        $this->creationDate = date('D, d M Y H:i:s');
    }
}

$tweet = new Tweet('My first tweet');
var_dump($tweet);
//$tweet->setTweetBody('My first tweet');
//$tweet->setCreationDate();
//echo $tweet->getTweetBody();
//echo '<br>';
//echo $tweet->getCreationDate();