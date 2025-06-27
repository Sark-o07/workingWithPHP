<?php
class Database {
    private $connection;
    private $statement;

    public function __construct($config, $username = 'root', $password = '') {
        $dsn = "mysql:". http_build_query($config, '', ';');

        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $this->connection = new PDO($dsn, $username, $password, $options);
    }

    public function query($sql, $params = []) {
        try {
            $this->statement = $this->connection->prepare($sql);
            $this->statement->execute($params);
            return $this;
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function findOrFail() {
        $result = $this->statement->fetch();
        if (!$result) {
            abort(Response::HTTP_NOT_FOUND);
        }
        return $result;
    }

    public function fetchAll() {
        return $this->statement->fetchAll();
    }
}

