<?php

file_put_contents("data.txt", "This is Day 13 practice\n");

$content = file_get_contents("data.txt");

echo $content;
