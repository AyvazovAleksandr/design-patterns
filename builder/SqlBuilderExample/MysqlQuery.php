<?php

namespace SqlBuilderExample;

class MysqlQuery implements SQLQueryBuilder
{
    protected $query;

    protected function reset(): void
    {
        $this->query = new \stdClass();
    }

    public function select(string $table, array $fields): SQLQueryBuilder
    {
        $this->reset();
        $this->query->base = "SELECT " . implode(", ", $fields) . " FROM " . $table;
        $this->query->type = 'select';
        return $this;
    }

    public function update(string $table, array $fields): SQLQueryBuilder
    {
        $this->reset();
        $cal_fun_fields = function ($key, $value) {
            if ( (empty($key)) || (empty($value))  ) {
                throw new \Exception("Incorrect WHERE array");
            }
            return ("$key = '$value'");
        };
        $this->query->base = "UPDATE " . $table . " SET " . implode(", ", array_map($cal_fun_fields, array_keys($fields), array_values($fields)));
        $this->query->type = 'update';
        return $this;
    }

    public function delete(string $table): SQLQueryBuilder
    {
        $this->reset();
        $this->query->base = "DELETE " . $table;
        $this->query->type = 'delete';
        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        if (!in_array($this->query->type, ['select', 'update', 'delete'])) {
            throw new \Exception("WHERE can only be added to SELECT, UPDATE OR DELETE");
        }
        $this->query->where[] = "$field $operator '$value'";

        return $this;
    }

    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        if (!in_array($this->query->type, ['select'])) {
            throw new \Exception("LIMIT can only be added to SELECT");
        }
        $this->query->limit = " LIMIT " . $start . ", " . $offset;

        return $this;
    }

    public function getSQL(): string
    {
        $query = $this->query;
        $sql = $query->base;
        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }
        if (isset($query->limit)) {
            $sql .= $query->limit;
        }
        $sql .= ";";
        return $sql;
    }
}