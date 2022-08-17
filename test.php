<?php
require_once __DIR__ . '/vendor/autoload.php';



use App\Models\TestModel;

$test = new TestModel();



echo "<pre>";
print_r($test->all());

//$index = 9;
//echo "<pre>";
//print_r($test->getByIndex($index));

echo "<pre>";
$newContent = "This is a new question";
$newAnswer = "This is a new answer";
//print_r($test->add($newContent, $newAnswer));


$index = 15;
//print_r($test->update($index, $newContent, $newAnswer));
//print_r($test->delete($index));