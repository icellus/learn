<?php


/**
* test
*/
class test
{
    
    function __construct()
    {
        echo '123';
        exit();
    }

    function __destruct() {
        echo '456';
    }

}


$a = new test();
