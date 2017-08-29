<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetNicknameReturnsAString()
    {
        $user = new User('Chriz','Chris','Stenke');

        $nickname = $user->getNickname();

        $this->assertTrue(is_string($nickname));
        $this->assertEquals('Chriz', $nickname);

        $user2 = new User();
        $this->assertEquals('',$user2->getNickname());
    }
}
