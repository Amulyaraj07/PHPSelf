<?php
    //8 data Types in PHP
    //1. Integer
    $int = 10;
    echo "Integer: $int <br>";
    //2. Float
    $float = 10.5;
    echo "Float: $float <br>";
    //3. String
    $str = "Hello, World!";
    echo "String: $str <br>";
    //4. Boolean
    $bool = true;
    echo "Boolean: $bool <br>";
    //5. Array
    $arr = array(1, 2, 3, 4, 5);
    echo "Array: ";
    print_r($arr);
    echo "<br>";
    //6. Object
    $obj = new stdClass();
    $obj->name = "John";
    $obj->age = 30;
    echo "Object: ";
    print_r($obj);
    //7. Null
    $null = null;
    echo "Null: $null <br>";
    //8. Resource
    $res = fopen("test.txt", "r");
?>