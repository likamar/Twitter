<?php

class Comment
{
    private $id;
    
    private $userId;
    
    private $tweetId;
    
    private $commentBody;
    
    private $creationDate;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getUserId()
    {
        return $this->userId;
    }
    
    public function getTweetId()
    {
        return $this->tweetId;
    }
    
    public function getCommentBody()
    {
        return $this->commentBody;
    }
    
    public function getCreationDate()
    {
        return $this->creationDate;
    }
}

