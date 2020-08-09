<?php
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} order by `created_at` desc");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function select($table, $col, $val)
    {
        $statement = $this->pdo->prepare("select * from {$table} where {$col}={$val}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            return 1;
        } catch (Exception $e) {
            return $e->getmessage();
        }
    }
    public function update($table, $parameters, $where)
    {
        $sql = sprintf(
            'update %s set %s where id=%d',
            $table,
            implode(',', array_map(function ($k) {
                return "$k=:$k";
            }, array_keys($parameters))),
            $where
        );
        //dd($sql);
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            return 1;
        } catch (Exception $e) {
            return $e->getmessage();
        }
    }
    public function delete($table, $id)
    {
        try {
            //echo 'try';
            $statement = $this->pdo->prepare("delete from {$table} where `id`=$id");
            $statement->execute();
            return 1;
        } catch (Exception $e) {
            //echo 'catch';
            return $e->getMessage();
        }
    }
}
