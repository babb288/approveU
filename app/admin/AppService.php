<?php
declare (strict_types = 1);

namespace app\admin;

use app\admin\interface\EmailServiceInterface;
use app\admin\interface\UserServiceInterface;
use app\admin\service\EmailService;
use app\admin\service\User;
use think\Service;

/**
 * 应用服务类
 */
class AppService extends Service
{
    public function register(): void
    {
        // 服务注册
        $this->app->bind(
            abstract: UserServiceInterface::class,
            concrete: User::class
        );

        $this->app->bind(
            abstract: EmailServiceInterface::class,
            concrete: EmailService::class
        );
    }

    public function boot()
    {

        // 服务启动
    }
}
