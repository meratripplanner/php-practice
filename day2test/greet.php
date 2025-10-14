<?php
echo "Enter your name: ";

$name = (string)trim(fgets(STDIN));

echo "Hemmo, $name! Welcome to PHP on Linux.\n";

if($name === "admin") {
    echo "Access Granted.\n";
}
