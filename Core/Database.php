<?php

namespace Core;

use PDO;

class Database
{
    private $connection;
    private $statement;
    public function __construct($config, $username = "if0_36936337", $password = "qJjMmVlXsfx1As")
    {
        $dsn = "mysql:" . http_build_query($config, "", ";");

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        try {
            $this->statement = $this->connection->prepare(($query));
            $this->statement->execute($params);
            return $this;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getAll()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}
