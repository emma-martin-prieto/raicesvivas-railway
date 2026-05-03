<?php

namespace RaicesVivas\Config;

class ConfigBD {
    public static function host(): string {
        return getenv('MYSQLHOST') ?: 'localhost';
    }

    public static function port(): string {
        return getenv('MYSQLPORT') ?: '3306';
    }

    public static function db(): string {
        return getenv('MYSQLDATABASE') ?: 'raicesvivas';
    }

    public static function user(): string {
        return getenv('MYSQLUSER') ?: 'root';
    }

    public static function pass(): string {
        return getenv('MYSQLPASSWORD') ?: '';
    }
}