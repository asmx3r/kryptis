<?php

class Connection
{

    private static $insta = null;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance () {
      if (!isset(self::$insta)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$insta = new PDO('mysql:host=localhost;dbname=test','user1','user1', $pdo_options);
      }
      return self::$insta;
    }
}
