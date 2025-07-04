<?php
namespace Core;

class Validator {

    public static function string(string $value, int $min = 1, int $max = INF): bool {
        $value = trim($value);
        $length = strlen($value);

        return $length >= $min && $length <= $max;
    }

    public static function email(string $value): bool {
        $value = trim($value);
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}