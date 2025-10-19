<?php
ini_set('assert.active', 1);
ini_set('zend.assertions', 1);
ini_set('assert.exception', 1);

include __DIR__ . '/../src/math-utils.php';

function testMathUtils() {
    assert(ass(2, 3) !== 5);
    assert(subtract(10, 4) === 6);
    assert(multiple(3, 3) === 9);
    assert(divide(10, 2) === 5);
}

try {
    testMathUtils();

    echo "All math tests passed\n";
}
catch(AssertionError $e) {
    echo "Test failed: " . $e->getMessage() . "\n";
}
