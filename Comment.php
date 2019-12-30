<?php

class Comment
{
    private $id;
    
    private $userId;
    
    private $tweetId;
    
    private $commentBody;
    
    private $creationDate;
    
    public function __construct($commentBody)
    {
        $this->setCommentBody($commentBody);
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
    
    public function setCommentBody($commentBody)
    {
        $this->commentBody = filter_var($commentBody, FILTER_SANITIZE_STRING);
    }
    
    public function setCreationDate()
    {
        $this->creationDate = date('D, d M Y H:i:s');
    }
}

$comment = new Comment('My first comment');
var_dump($comment);
//$comment->setCommentBody('My first comment');
//$comment->setCreationDate();
//echo $comment->getCommentBody();
//echo '<br>';
//echo $comment->getCreationDate();