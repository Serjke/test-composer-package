<?php

declare(strict_types=1);

namespace Komarov\TestComposerPackage;

class Str
{
    /**
     * Generate a "random" alphanumeric string
     *
     * @param int $length
     *
     * @return string
     */
    public static function random(int $length = 16): string
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }
}
