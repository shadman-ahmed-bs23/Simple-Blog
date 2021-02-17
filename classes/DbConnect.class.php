<?php 

class DbConnect {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "bT4sM2h8SuBV&@2a";
    private $dbName = "oopblog";

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}