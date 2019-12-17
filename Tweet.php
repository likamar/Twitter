<?php

class Tweet
{
    private $id;
    
    private $userId;
    
    private $text;
    
    private $creationDate;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getUserId()
    {
        return $this->userId;
    }
    
    public function getText()
    {
        return $this->tweetText;
    }
    
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    
    public function setText($tweetText)
    {
        $this->text = $tweetText;
    }
    
    public function setCreationDate()
    {
        $this->creationDate = date('D, d M Y H:i:s');
    }
}
