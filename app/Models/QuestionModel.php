<?php

namespace App\Models;
use App\Models\BaseModel;
class QuestionModel extends BaseModel
{
    const question = 'question';
    public function getQuestion()
    {
        $sql = "SELECT * FROM question";
        $query = $this->query($sql);
        $ar = [];
        while ($row = $query->fetch()) {
            array_push($ar, $row);
        }
        return $ar;
    }

    public function addQuestion($content, $answer){
        $sql = "INSERT INTO question(content, answer) values ('$content', '$answer')";
        return $this -> query($sql);
    }

    public function delQuestion($id){
        $sql = "DELETE from question where id='$id'";
        return $this -> query($sql);
    }
}