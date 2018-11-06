<?php

/**
 * file autoload_demo.php
 */
function  __autoload($className) {
    $filePath = “project/class/{$className}.php”;
    if (is_readable($filePath)) {
        require($filePath);
    }
}

if (1) {
    $a = new A();
    $b = new B();
    $c = new C();
    // …
} else if (ConditionB) {
    $a = newA();
    $b = new B();

}