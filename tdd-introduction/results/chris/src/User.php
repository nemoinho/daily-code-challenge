<?php

class User
{
    private $nickname = '';
    private $firstname = '';
    private $lastname = '';

    /**
     * User constructor.
     * @param string $nickname
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct($nickname = '', $firstname = '', $lastname = '')
    {
        $this->nickname = $nickname;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastname;
    }
}
