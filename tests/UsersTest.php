<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include_once 'test3/User.php';
include_once 'test3/Post.php';

final class UserTest extends TestCase
{
    public function testCreateUserTest(): void
    {
        $user = new User('Jhon', 'Uick');
        $this->assertEquals(1, 1);
    }

    public function testFullUserName(): void
    {
        $user = new User('Jhon', 'Uick');
        $this->assertEquals($user->getFullName(), 'Jhon Uick');
    }

    public function testAddPost(): void
    {
        $user = new User('Jhon', 'Uick');
        $post = new Post(0, 'title', 'body', $user);
        $this->assertEquals($user->getAllPosts()[0], $post);
    }

    public function testAddSeveralPost(): void{
        $user = new User('Jhon', 'Uick');
        $post = new Post(0, 'title', 'body', $user);
        $post2 = new Post(1, 'title1', 'body2', $user);
        $this->assertEquals($user->getAllPosts()[0], $post);
        $this->assertEquals($user->getAllPosts()[1], $post2);
    }

    public function testDeletePost(): void{
        $user = new User('Jhon', 'Uick');
        $post = new Post(0, 'title', 'body', $user);
        $post2 = new Post(1, 'title1', 'body2', $user);
        $user->deletePost($post);
        $this->assertEquals($user->getAllPosts()[0], $post2);
    }

    

}



