<?php

abstract class BasicEnum {

    private static $constCacheArray = NULL;

    /**
     * Get All Constants of Class in named array
     * @return array
     */
    public static function getConstants() {
        if (self::$constCacheArray == NULL) {
            self::$constCacheArray = array();
        }
        $calledClass = get_called_class();
        if (!array_key_exists($calledClass, self::$constCacheArray)) {
            $reflect = new ReflectionClass($calledClass);
            self::$constCacheArray[$calledClass] = $reflect->getConstants();
        }
        return self::$constCacheArray[$calledClass];
    }

    /**
     * Validate Constant By Name
     * @param string $name
     * @param boolen $strict need to check in case sensitive manner
     * @return boolean 
     */
    public static function isValidName($name, $strict = false) {
        $constants = self::getConstants();

        if ($strict) {
            return array_key_exists($name, $constants);
        }

        $keys = array_map('strtolower', array_keys($constants));
        return in_array(strtolower($name), $keys);
    }

    /**
     * Validate Value of Constant in case sensitive manner
     * @param type $value
     * @return boolean 
     */
    public static function isValidValue($value) {
        $values = array_values(self::getConstants());
        return in_array($value, $values, $strict = true);
    }

    /**
     * Get Constant Name by Value
     * @param type $val value to search
     * @return string
     */
    public static function getConstNameByValue($val) {
        return array_search($val, self::getConstants());
    }

}