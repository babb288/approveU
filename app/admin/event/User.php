<?php

namespace app\admin\event;

class User
{
    public $user;
    public $loginTime;
    public $ip;

    public function __construct($user, string $ip)
    {
        $this->user = $user;
        $this->ip = $ip;
        $this->loginTime = date('Y-m-d H:i:s');
    }

}