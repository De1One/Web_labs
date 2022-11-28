<?php
//task 1_a
$pattern = "/a..b/";
$subject = "ahb acb aeb aeeb adcb axeb abba adca abea";
$matches = [];
preg_match_all($pattern, $subject, $matches);
print_r($matches);

//task 1_b
$pattern = "/(\d)+/";
$subject = "a1b2c3";
echo preg_replace_callback($pattern, fn($matches) => intval($matches[0]) ** 2, $subject);