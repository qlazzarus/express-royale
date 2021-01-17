<?php

namespace App\Services;

use App\User;
use App\UserChannel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

class AccountService
{
    /**
     * @param string $username
     * @param string $password
     * @return ?User
     */
    public function loginByUsername(string $username, string $password): ?User
    {
        $channel = UserChannel::whereChannel(\App\Enums\UserChannel::Name)
            ->where('channel_id', $username)
            ->first();

        if ($channel && Hash::check($password, $channel->password)) {
            return $channel->user;
        }

        $channel = UserChannel::whereChannel(\App\Enums\UserChannel::Email)
            ->where('channel_id', $username)
            ->first();

        if ($channel && Hash::check($password, $channel->password)) {
            return $channel->user;
        }

        return null;
    }

    /**
     * @param string $username
     * @param string $email
     * @param string $password
     * @return User
     * @throws Throwable
     */
    public function createByUsername(string $username, string $email, string $password): User
    {
        return DB::transaction(function() use ($username, $email, $password) {
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
                    $channel->password = Hash::make($password);
                    $channel->channel = $key;
                    $channel->save();
                },
                ARRAY_FILTER_USE_BOTH
            );

            return $user;
        });
    }

    /**
     * @param User $user
     * @param string $requestId
     * @return string
     */
    public function publishToken(User $user, string $requestId): string
    {
        $user->tokens()->where('name', $requestId)->delete();

        return $user->createToken($requestId)->plainTextToken;
    }
}
