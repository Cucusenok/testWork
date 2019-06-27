<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include_once 'test3/User.php';
include_once 'test3/Post.php';

final class PostsTest extends TestCase
{
    public function testCreatePost(): void
    {   
        $user = new User('Jhon', 'Uick');
        $post = new Post('title1', 'body1', $user);
        $this->assertEquals(1, 1);
    }

    
    public function testPostTitle(): void
    {   
        $user = new User('Jhon', 'Uick');
        $post = new Post('title1', 'body1', $user);
        $this->assertEquals($post->getTitle(), 'title1');
    }

    public function testPostBody(): void
    {   
        $user = new User('Jhon', 'Uick');
        $post = new Post('title1', 'body1', $user);
        $this->assertEquals($post->getBody(), 'body1');
    }

    public function testAuthorPost(): void
    {   
        $user = new User('Jhon', 'Uick');
        $post = new Post('title1', 'body1', $user);
        $this->assertEquals($post->getAuthor()->getFullName(), 'Jhon Uick');
    }

    public function testNewAuthorPost(): void
    {   
        $user = new User('Jhon', 'Uick');
        $newUser = new User('Not Jhon', 'Uick');
        $post = new Post('title1', 'body1', $user);
        $post->setAuthor($newUser);
        $this->assertEquals($post->getAuthor()->getFullName(), 'Not Jhon Uick');
    }


   

}



