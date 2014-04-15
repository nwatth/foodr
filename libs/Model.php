<?php

class Model {

    protected static $db = null;

    public function __construct() {
        if (!(self::$db instanceof Database)) {
            self::$db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);;
        }
    }

}