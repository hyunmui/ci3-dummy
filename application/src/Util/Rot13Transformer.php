<?php

namespace App\Util;

class Rot13Transformer
{
    public function transform(string $value): string
    {
        return str_rot13($value);
    }
}
