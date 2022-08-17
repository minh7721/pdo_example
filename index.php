<?php
include __DIR__ . '/vendor/autoload.php';

use App\Models\QuestionModel;
use App\Models\BaseModel;
$base = new BaseModel();
//echo $base -> query("SELECT * FROM question");

$question = new QuestionModel();

echo "<pre>";
print_r($question -> getQuestion());

//require_once('Database.php');
// $sqlUsers = $conn->prepare("SELECT * FROM user");
// $sqlUsers->execute();
// $sqlUsers->setFetchMode(PDO::FETCH_ASSOC);
// while($rowUsers = $sqlUsers->fetch()){
//     echo "<pre>";
//     print_r($rowUsers);
// }

// include __DIR__ . '/vendor/autoload.php';
// use App\Database;
// use App\example;

// $example = new example();

?>