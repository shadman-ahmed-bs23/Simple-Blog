<?php 

class DbConnect {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "Admin@123";
    private $dbName = "oopblog";

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}