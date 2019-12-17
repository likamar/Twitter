<?php

class Tweet
{
    private $id;
    
    private $userId;
    
    private $tweetText;
    
    private $creationDate;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getUserId()
    {
        return $this->userId;
    }
    
    public function getTweetText()
    {
        return $this->tweetText;
    }
    
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    
    public function setTweetText($tweetText)
    {
        $this->tweetText = $tweetText;
    }
    
    public function setCreationDate()
    {
        $this->creationDate = date('D, d M Y H:i:s');
    }
}
