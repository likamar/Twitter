<?php

require_once './Tweet.php';

class Comment extends Tweet
{
    private $tweetId;
    
    public function getTweetId()
    {
        return $this->tweetId;
    }
}

