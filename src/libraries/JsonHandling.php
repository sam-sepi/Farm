<?php

namespace Farm\Libraries;

class JsonHandling 
{
    /**
     * JSONencode
     *
     * @param array $data
     * @return void
     */
    public static function JSONencode(array $data)
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    /**
     * JSONdecode
     *
     * @return array
     */
    public static function decodeFromInput(): array
    {
        return json_decode(file_get_contents('php://input'), true);
    }

    public static function decodeFromFile($path): array
    {
        return file_exists($path) ? json_decode(file_get_contents($path), true) : die('File error');
    }
}