<?php

class UserTable extends Table{

    /**
     * @var string
     */
    private $tableName = "users";

    function setTableName(string $newName)
    {
        $this->tableName = $newName;
    }

    function getUserById($userId)
    {
        $sql = $this->escape("SELECT * FROM $this->tableName WHERE id=$userId");
        $user = mysqli_query($this->con, $sql)->fetch_object();

        if(!empty($user)){
            $data[$userId] = $user->name;
            return $data;
        }
        else return false;
    }
}
