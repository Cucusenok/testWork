<?php

class Table{

    /**
     * @var mysqli
     */
    protected $con;

    function __construct(mysqli $con)
    {
        $this->con = $con;
    }

    function getConnection():mysqli
    {
        return $this->con;
    }

    function escape(string $query):string
    {
        return $this->con->real_escape_string($query);
    }
}