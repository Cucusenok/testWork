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
        
        /**
         * getting index in array
         */
        $key = array_search( $postDelete, $this->postsArray); 
        
        if($key !== false)
        {
            unset($this->postsArray[$key]);
            $postDelete->deleteAuthor();
        }

        $this->postsArray = array_values($this->postsArray);

    }
    

    
}
