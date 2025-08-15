<?php

namespace app\admin\listener;

use app\admin\event\User;
use think\facade\Log;

class LogUserLogin
{

    public function handle(User $event): void
    {
        Log::info(json_encode($event).'监听');
    }


}