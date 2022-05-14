<?php

namespace App\core;


class  Database
{
    protected \PDO|null $pdo = null;
    
    public function connexionDB(): void
    {
        try {
            $this->pdo = new \PDO('mysql:host=localhost;dbname=poo_mvc_db', 'poo_mvc_user','poo_mvc_pass');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function closeConnexinDB(): void
    {
        $this->pdo = null;
    }
    public function excuteUpdate(string $sql, array $data=[], bool $single = false): int
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        // die("in executUpdate".var_dump($data).$sql);    
        return $this->pdo->lastInsertId();
    }
    public function excuteSelect(string $sql, array $data = [], bool $single = false): object|array|null
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        if ($single) {
            $result = $query->fetch();
        } else {
            $result = $query->fetchAll();
        }

        return $result;
    }
}
