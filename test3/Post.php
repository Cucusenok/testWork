<?php
include_once('User.php');

class Post{
     /**
     * @var string
     */
    private $title, $body;

     /**
     * @var User
     */
    private $author;

    function __construct(string $title, string $body, User $author){
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addPost($this);
    }

    function getTitle(): string
    {   
        return $this->title;
    }

    function setTitle(string $newTitle): void
    {
        $this->title = $newTitle;
    }

    function getBody():string
    {
        return $this->body;
    }

    function setBody(string $newBody): void
    {
        $this->body = $newBody;
    }

    function getAuthor():User
    {
        if($this->author)
            return $this->author;
    }

    function setAuthor(User $newAuthor):void
    {
        $this->author = $newAuthor;
    }

    function deleteAuthor():void
    {
        $this->author = false;
    }


}