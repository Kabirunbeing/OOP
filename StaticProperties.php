<?php

class StaticPropertiesExample {
    public static $count = 0;

    public static function incrementCount() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

?>
