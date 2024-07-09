<?php

namespace App\Models\Player;

enum Gender: string
{
    case Male = 'male';
    case Female  = 'female';

    public const DEFAULT = self::Male;
}
