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
}