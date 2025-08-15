<?php

namespace app\admin\service;

use app\admin\interface\EmailServiceInterface;

class EmailService implements EmailServiceInterface
{

    public function send(array $data): array
    {
        return ['code'=> 20,'data'=>$data];
    }



}