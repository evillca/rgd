<?php

class Database{
    public static function connect() {
        $db = new mysqli('localhost', 'root', 'root', 'rgd');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}