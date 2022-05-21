<?php

namespace App\Core;

use PDO;



class  Database
{
    protected \PDO|null $pdo = null;

    public function connexionDB(): void
    {
        try {
            // die;
            $this->pdo = new \PDO('mysql:host=localhost;dbname=poo_base', 'root', '');
            echo "la connexion est passée \n";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function closeConnexinDB(): void
    {
        $this->pdo = null;
        // echo "closeConnexinDB";
    }
    public function excuteUpdate(string $sql, array $data = [], bool $single = false): int
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        // die("in executUpdate".var_dump($data).$sql);    
        return $this->pdo->lastInsertId();
    }
    public function excuteSelect(string $sql, array $data = [], bool $single = false): object|array|null
    {
        $query = $this->pdo->prepare($sql);
        // die("into excuteSelect ");
        $re = $query->execute($data);
        if ($single) {
            $result = $query->fetch(\PDO::FETCH_OBJ);
            if ($query->rowCount()==0) {
                return null;
            }
        } else {
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }
}
