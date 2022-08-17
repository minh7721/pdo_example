<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Models\QuestionModel;

$question = new QuestionModel();

echo "<pre>";
print_r($question->all());

//$index = 9;
//echo "<pre>";
//print_r($question->getByIndex($index));

//echo "<pre>";
$newContent = "This is a new question";
$newAnswer = "This is a new answer";
//print_r($question->add($newContent, $newAnswer));

$index = 15;
//print_r($question->update($index, $newContent, $newAnswer));
//print_r($question->delete($index));
?>