<?php
use PHPUnit\Framework\TestCase;

class UserGroupTest extends TestCase
{
    public function testGetAdminReturnsAUserInstance()
    {
        $adminUser = new User('Chriz','Chris','Stenke');

        $userGroup = new UserGroup($adminUser);

        $this->assertTrue($userGroup->getAdmin() instanceof User);
    }

    public function testCountUsers()
    {
        $adminUser = new User('Chriz', 'Chris', 'Stenke');
        $user1 = new User('nemo','Felix','Nehrke');

        $userGroup = new UserGroup($adminUser);
        $this->assertEquals(1,count($userGroup->getUsers()));

        $userGroup->addUser($user1);
        $this->assertEquals(2,count($userGroup->getUsers()));

        $userRemoved = $userGroup->removeUser($user1);
        $this->assertTrue($userRemoved);
        $this->assertEquals(1,count($userGroup->getUsers()));

        $userRemoved = $userGroup->removeUser($user1);
        $this->assertFalse($userRemoved);
    }
}
