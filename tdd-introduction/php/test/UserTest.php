<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetNicknameReturnsAString()
    {
        $user = new User();

        $nickname = $user->getNickname();

        $this->assertTrue(is_string($nickname));
    }
}
