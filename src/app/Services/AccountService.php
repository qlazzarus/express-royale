<?php

namespace App\Services;

use App\User;
use App\UserChannel;
use Throwable;

class AccountService
{
    /**
     * @param $username
     * @param $email
     * @param $password
     * @return User
     * @throws Throwable
     */
    public function createByUsernameAndEmail($username, $email, $password)
    {
        return \DB::transaction(function() use ($username, $email, $password) {
            $user = new User();
            $user->save();
            $userId = $user->id;

            array_filter(
                [
                    \App\Enums\UserChannel::Name => $username,
                    \App\Enums\UserChannel::Email => $email
                ],
                function($values, $key) use ($userId, $password)
                {
                    $channel = new UserChannel();
                    $channel->user_id = $userId;
                    $channel->channel_id = $values;
                    $channel->password = \Hash::make($password);
                    $channel->channel = $key;
                    $channel->save();
                },
                ARRAY_FILTER_USE_BOTH
            );

            return $user;
        });
    }
}
