<?php

namespace App\core;
class Model implements IModel
{
    protected static string $table;
    protected static function dataBase(): Database
    {
        return new Database;
    }
    public static function executeQuery(string $sql, string $functionName, array $data = [], bool $single = false): object|array|null|int
    {
        $db = self::dataBase();
        $db->connexionDB();
        if ($functionName == "excuteUpdate") {
            $result =  $db->excuteUpdate($sql, $data, $single);
            // die("in executequery");
        } elseif ($functionName == "excuteSelect") {
            $result =  $db->excuteSelect($sql, $data, $single);
        }
        $db->closeConnexinDB();
        return  $result;
    }
    public static function table(): string
    {
        $table = get_called_class();
        $table = ($table == "AC" or $table == "RP" or $table == "Etudiant" or $table == "Professeur" or $table == "Personne") ? "personne" : strtolower(($table));
        return $table;
    }
    public function insert(): int
    {
        return  0;
    }
    public function update(): int
    {
        echo self::table();
        return  0;
    }
    public static function delete(int $id): int
    {
        $sql = "delete from " . self::table() . " where id=?";
        $result = self::executeQuery($sql, "ExcuteUpdate", [$id]);
        return $result;
    }

    public static function findAll(): array
    {
        $sql = "select * from " . self::table();
        $result = self::executeQuery($sql, "ExcuteSelect");
        return $result;
    }
    public static function findById(int $id): object|null
    {
        $sql = "select from " . self::table() . " where id=$id";
        return  null;
    }
    public static function findBy(string $sql, array $data = [], $single = false): object|null|array
    {
        $sql = "select from" ;
        $result = self::executeQuery($sql, "ExcuteSelect");
        return  $result;
    }
}
