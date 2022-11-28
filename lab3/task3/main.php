<?php
require_once "validate.php";
require_once "render.php";

$email = $_POST['email'];
$title = $_POST['title'];
$text = $_POST['text'];
$category = $_POST['category'];
$filePath = $category . '/' .  $title . ".txt";

if(!isset($email) || !isset($title) || !isset($text) || !isset($category))
{
    echo "error occurred";
    return;
}

if(!validateEmail($email))
{
    echo "wrong email type";
    return;
}

if(!file_exists($category))
{
    mkdir($category, 0777, true);
}

if(!file_exists($filePath))
{
    $adFile = fopen($filePath, "w") or die('Unable to create a new file...');
    fwrite($adFile, $text);
}

$result = renderTemplate('main_site.php');
echo $result;