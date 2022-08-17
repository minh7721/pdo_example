<?php

namespace App\Models;

use App\config\Config;
use src\Connection;
use src\QueryBuilder;

class TestModel
{
    protected $query;

    public function __construct()
    {
        $configs = new Config();
        $config = $configs->config();
        $query = new QueryBuilder(Connection::make($config['database']));
        $this->query = $query;
    }

    public function all()
    {
        $results = $this->query->select('question')->all();
        return $results;
    }

    public function getByIndex($index)
    {
        $results = $this->query->select('question')->where([['id', '=', $index]])->all();
        return $results ?: "Ko co dau dung co tim";
    }

    public function add($content, $answers){
        $new_id = $this->query->insert('question', [
            ['content', 'answer'],
            ["$content", "$answers"],
        ])->go();
       return $this->all();
    }

    public function update($index, $content, $answers){
      $update = $this->query->update('question', [
            'content' => "$content",
            'answer' => "$answers"
            ])
            ->where([['id', '=', $index]])
            ->go();
       return $this->all();
    }

    public function delete($index){
        $delete = $this->query->delete('question')
            ->where([['id', '>', 16]])
            ->go();
        if($delete){
            echo "Mission Succesfully";
        }
        else{
            echo "Mission Failed, you so stupid";
        }
        return $this->all();
    }

}