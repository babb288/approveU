<?php

namespace app\admin\interface;

interface EmailServiceInterface
{
    public function send(array $data):array;

}