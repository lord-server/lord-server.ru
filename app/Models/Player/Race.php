<?php

namespace App\Models\Player;

enum Race: string
{
    case Shadow = 'shadow';
    case Human  = 'human';
    case Elf    = 'elf';
    case Hobbit = 'hobbit';
    case Dwarf  = 'dwarf';
    case Orc    = 'orc';

    public const DEFAULT = self::Shadow;
}
