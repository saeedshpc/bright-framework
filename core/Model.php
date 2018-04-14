<?php namespace Core;

abstract class Model
{
    protected $pdo;

    protected $tableName = null;

    public function __construct()
    {
        $this->pdo = $this->make();
        $this->checkTable();
    }

    protected function make()
    {
        try {
            return new \PDO("mysql:host=localhost;dbname=mvcproject", "root", "saeed");
        } catch(\Exception $e) {
            throw $e;
        }
    }

    public function selectAll()
    {
        if (is_null($this->tableName)) {
            throw new \Exception("table not found");
        }

        $stmt = $this->pdo->prepare("SELECT * FROM {$this->tableName}");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function checkTable()
    {
        $stmt = $this->pdo->prepare("SHOW TABLES LIKE '{$this->tableName}'");
        $stmt->execute();
        if ($stmt->fetch() == false)
            throw new \Exception("{$this->tableName} table not exists");
    }
}
