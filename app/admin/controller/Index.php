<?php

namespace app\admin\controller;

use app\admin\interface\UserServiceInterface;
use app\admin\event\User;

class Index
{

    protected UserServiceInterface $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index(): \think\response\Json
    {
        $array = $this->userService->register(data:['code' => 2000000]);
        event('UserLogin',new User(120,'127.0.0.1'));
        return json($array);
    }



}
