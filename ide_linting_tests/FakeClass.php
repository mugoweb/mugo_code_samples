<?php

class FakeClass
{

    public $publicProperty = 'publicProperty';
    public $privateProperty = 'privateProperty';
    public static $publicStaticProperty = 'publicStaticProperty';
    private static $privateStaticProperty = 'privateStaticProperty'; // property never used in class

    public function __construct($user)
    {
        if (!isset($user)) {
            return;
        } else {
            echo $user;
        }
    }

    public static function publicStaticMethod($arg1, $arg2)
    {
        echo $this->publicStaticProperty . $arg1 . $arg2; // reference to $this in static method context
    }

    public function publicMethod()
    {
        $someTest = false; // value is overwritten without being used
        $message = '<h1>Hi! The date today is ' . date('d-M-Y') . '</h1>'; // note html syntax highlighting
        $someTest = true;
        if ($someTest) {
            return $message;
        }

    } // missing return statement

    private function privateMethod($arg1, $arg2) // private method never used in class
    {
        echo $this->privateProperty . $arg1 . $arg2;
    }

}

// usage examples
$example = new FakeClass(); // missing expected argument
$example->publicStaticMethod('a', 'b'); // note in-line argument hints
$example::publicStaticMethod('a'); // missing expected argument
$example->privateMethod('a', 'b'); // call to private method
$example::privateMethod('a', 'b'); // non-static method called statically
FakeClass::privateMethod('a', 'b'); // non-static method called statically
