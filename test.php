<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Models\TestModel;

$test = new TestModel();

//echo "<pre>";
//print_r($test->all());

//$index = 9;
//echo "<pre>";
//print_r($test->getByIndex($index));

//echo "<pre>";
$newContent = "This is a new question";
$newAnswer = "This is a new answer";
//print_r($test->add($newContent, $newAnswer));

$index = 15;
//print_r($test->update($index, $newContent, $newAnswer));
//print_r($test->delete($index));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO</title>
</head>
<body>
    <table style="width: 100%">
        <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 45%;">Content</th>
            <th style="width: 45%;">Answer</th>
        </tr>

        <?php
        $items = $test->all();
        foreach ($items as $item) {
            ?>
            <tr>
                <td><?php echo $item['id']?></td>
                <td><?php echo $item['content']?></td>
                <td><?php echo $item['answer']?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
