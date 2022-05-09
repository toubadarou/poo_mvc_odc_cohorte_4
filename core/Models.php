<?php


class Model implements IModel
{
    protected static string $table;
    public function insert(): int
    {
        return  0;
    }
    public function update(): int
    {
        return  0;
    }
    public static function delete(int $id): int
    {
        $sql = "delete from '" . self::$table . "' where id=$id";
        return  0;
    }
    public static function findAll(): array
    {
        $sql = "select * from '" . self::$table . "'";
        return  [];
    }
    public static function findById(int $id): object|null
    {
        $sql = "select from '" . self::$table . "' where id=$id";
        return  null;
    }
    public static function findBy(string $sql, array $data = null, $single = false): object|null|array
    {
        return  null;
    }
}
