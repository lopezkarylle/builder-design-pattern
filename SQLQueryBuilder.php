<?php

namespace DesignPattern;

interface SQLQueryBuilder
{
	public function select($table, $fields);
	public function where($field, $value, $operator);
	public function limit($start, $offset);
    public function join($table, $fields, $field);
    public function orderBy($field, $order);
    public function reset();
    public function getSQL();
}




