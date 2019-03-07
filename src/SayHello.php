<?php

namespace Hello;

class SayHello
{
    use World;
    public static function world()
    {
        return 'Hello World!';
    }
}