<?php
/**
 * Реестр
 */
class Product
{
    protected static $data = array();

    public static function set($key, $value)
    {
        self::$data[$key] = $value;
    }

    public static function get($key)
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    final public static function removeProduct($key)
    {
        if (array_key_exists($key, self::$data)) {
            unset(self::$data[$key]);
        }
    }
}

/*
 * =====================================
 *           USING OF REGISTRY
 * =====================================
 */

Product::set('name', 'First product');

print_r(Product::get('name'));
