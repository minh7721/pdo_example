<?php

namespace src;
use PDO;
class QueryPDO
{
    private $pdo = null;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function select($table, ){

    }
}