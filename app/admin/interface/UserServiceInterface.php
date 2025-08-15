<?php

namespace app\admin\interface;

interface UserServiceInterface
{

    public function register(array $data) :array;

    public function send(array $data):array;

}