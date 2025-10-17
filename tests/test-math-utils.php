<?php
include  '../src/math-utils.php';

function testAdd() {
    $result = add(5, 3);

    if($result === 8) {
        echo "testAdd passed\n";
    }
    else {
        echo "testAdd failed";
    }
}

function testSubtract() {
    $result = subtract(5, 3);

    if($result === 2) {
        echo "testubtract passed\n";
    }
    else {
       echo "testSubtract failed\n";
    }
}

testAdd();
testSubtract();
