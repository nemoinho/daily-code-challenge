<?php
use PHPUnit\Framework\TestCase;

class UserGroupTest extends TestCase
{
    public function testGetAdminReturnsAUserInstance()
    {
        $userGroup = new UserGroup();

        $this->assertTrue($userGroup->getAdmin() instanceof User);
    }
}
