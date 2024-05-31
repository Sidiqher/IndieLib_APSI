<?php

namespace App\Models;

class Buku
{
    private static $e_book = [
    [
        "title" => "Ekonomi",
        "slug" => "ekonomi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reiciendis eligendi nam nesciunt minus temporibus nulla repellat minima, quis ipsam assumenda nemo a facilis velit quasi. Possimus repellat amet atque!i"

    ],
    [
        "title" => "Kalkulus",
        "slug" => "kalkulus",
        "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit placeat temporibus adipisci aperiam vero dolorum facilis, ratione voluptates sunt accusantium ullam possimus architecto animi nobis saepe amet inventore quis quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reiciendis eligendi nam nesciunt minus temporibus nulla repellat minima, quis ipsam assumenda nemo a facilis velit quasi. Possimus repellat amet atque!i"

    ]
    ];


    public static function all()
    {
        return self::$e_book;
    }
}
