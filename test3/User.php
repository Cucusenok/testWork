<?php

class User{
    /**
     * @var string
     */
    private $name, $secondName;
    /**
     * @var array
     */
    private $postsArray = array();
    

    function __construct($name, $secondName)
    {
        $this->name = $name;
        $this->secondName = $secondName;
    }

    function addPost(Post $post): void
    {
        array_push($this->postsArray, $post);
    }

    function getFullName(): string
    {
        return $this->name . ' ' . $this->secondName;
    }

    function getAllPosts()
    {
        return $this->postsArray;
    }

    function deletePost(Post $postDelete){
        foreach($this->postsArray as $key=>$post){
            if($post->id == $postDelete->id){
                 unset($this->postsArray[$key]);
            }
            $this->postsArray = array_values($this->postsArray);
        }//end foreach
    }
    

    
}
