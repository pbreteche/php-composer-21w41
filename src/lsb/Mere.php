<?php

namespace App\lsb;

class Mere
{
    public function whoAmI()
    {
        return self::class;
    }

    public function whoAmIStatic()
    {
        return static::class;
    }
}
