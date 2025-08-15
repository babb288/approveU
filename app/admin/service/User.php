<?php

namespace app\admin\service;



use app\admin\interface\EmailServiceInterface;
use app\admin\interface\UserServiceInterface;

class User implements UserServiceInterface
{

    protected EmailService $emailService;

    public function __construct(EmailServiceInterface $emailService)
    {
        $this->emailService = $emailService;
    }

    public function register(array $data): array
    {
        return $this->send($data);
    }

    public function send(array $data): array
    {
        return $this->emailService->send($data);
    }

}