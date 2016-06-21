<?php

/*
Class Uzer::blok enforces rudimentary group access.  ...intended for use in bootstrap files of backend components.

 */
class Uzer
{
    /**
     * key by usertype -- and null gets a fail
     *
     * @var array
     */
    public static $types = array(
        'Super Administrator' => 1,
        'Administrator'       => 2,
        'Manager'             => 3,
        'Publisher'           => 4,
        'Editor'              => 5,
        'Author'              => 6,
        'Registered'          => 7,
        ''                    => 8,
    );

    /**
     * Compare (by rank) expected and actual usertypes
     *
     * @param object $user
     * @param string $expectedType
     *
     * @return boolean (expression)
     */
    public static function blok($user, $expectedType)
    {
        return self::types[$user->usertype] <= self::types[$expectedType];
    }
}
