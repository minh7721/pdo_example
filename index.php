<?php
include __DIR__ . '/vendor/autoload.php';

use App\Models\QuestionModel;
use App\Models\BaseModel;
$base = new BaseModel();

$question = new QuestionModel();

//List all Question
echo "<pre>";
print_r($question -> getQuestion());

// Add new Question
//$content = "Cau hoi moi";
//$answer = "Khong co dap an dung";
//$question->addQuestion($content, $answer);

// Del Question

//$id = 5;
//$question->delQuestion($id);
?>