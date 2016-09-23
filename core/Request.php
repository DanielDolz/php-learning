<?php


class Request
{

    public static function uri() {

//      No és una manera correcta de extraure la URI,
//      però ho deixem així de moment per veure la estructura
//      bàsica de fitxers i navegació (després tindrem eines
//      que ho faran)
        return trim($_SERVER['REQUEST_URI'],'/');

//        return urldecode(
//            parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)
//        );
    }

}