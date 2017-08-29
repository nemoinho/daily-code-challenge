<?php

class UserGroup
{
    /**
     * @var User $admin
     */
    private $admin;

    /**
     * @var User[] $users
     */
    private $users = [];

    public function __construct(User $admin, $users = array())
    {
        $this->admin = $admin;
        $this->users = $users;

        if(count($users) === 0)
        {
            $this->addUser($admin);
        }
    }

    /**
     * @param User $user
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function removeUser(User $user)
    {
        foreach($this->users as $key=>$tempUser)
        {
            if($tempUser === $user)
            {
                unset($this->users[$key]);
                return true;
            }
        }
        return false;
    }

    /**
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @return User
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}
