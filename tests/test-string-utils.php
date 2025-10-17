<?php
include "../src/string-utils.php";

function testUppercase() {

    $result = uppercase('hello');

    if($result === 'HELLO') {
        echo "testUppercase passed\n";
    }
    else { 
        echo "testUppercase failed\n";
    }
}

testUppercase();
