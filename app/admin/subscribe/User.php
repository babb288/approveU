<?php

namespace app\admin\subscribe;
use think\Event;
use think\facade\Log;

class User
{


    public function onUserLogin($user): void
    {
        Log::info(json_encode($user));
    }

    public function subscribe(Event $event): void
    {
        $event->listen('UserLogin', [$this,'onUserLogin']);

    }


}