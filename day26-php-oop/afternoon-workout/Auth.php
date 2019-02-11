<?php

class Auth
{
    // 8.
    protected static $users = []; // list of users

    // 9.
    public static function addUser($user)
    {
        static::$users[] = $user;
    }

    // 10.
    public static function getUsers()
    {
        return static::$users;
    }

    // 13.
    protected static function getCurrentUserId()
    {
        // 14.
        if (!empty($_SESSION['user_id'])) {
            return $_SESSION['user_id'];
        } else {
            return null;
        }
    }

    // 15.
    public static function getCurrentUser()
    {
        // 16.
        $user_id = static::getCurrentUserId();

        // 17.
        foreach (static::$users as $user) {
            // 18.
            if ($user_id == $user['user_id']) {
                return $user;
            }
        }

        // 19.
        return null;
    }
}