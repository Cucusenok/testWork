<?php

include_once('Table.php');
include_once('UserTable.php');
include_once('db/db.php');



/**
 * regex for 1,2,5,63... etc.
 */
$pattern = "/^([0-9]+[,]{1})+[0-9]+$/";
$data = $_GET['user_ids'];
preg_match($pattern, $data, $matches);

/**
 * if is normal format
 */
if($matches){

    $con =  ConnectDB::create("localhost", "root", "",  "testword");
    $userTable = new UserTable($con);

    foreach( explode(',', $data) as $userId){
         $user =  $userTable->getUserById($userId);
         
         if(!empty($user))
         {
            foreach($user as $id=>$name)
                echo "<a href=\"/show_user.php?id=$id\">$name</a><br>";
         }
    }//end foreach

    ConnectDB::close($userTable->getConnection());

}

