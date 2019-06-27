<?php

$sqlIndex = "CREATE INDEX gender ON users(gender);
CREATE INDEX birth_gender ON users(birth_date, gender);";

$ageStart = 852076800; //18
$ageEnd = 978307200; //22

$query  = "SELECT user_id, COUNT(user_id) 
            FROM phone_numbers 
                    WHERE user_id IN
                        (SELECT id FROM users 
                                WHERE birth_date >=$ageStart AND birth_date <= $ageEnd AND gender = 2) 
          GROUP BY user_id";


$queryWithJoins = "SELECT user_id, COUNT(user_id)
     FROM phone_numbers 
            INNER JOIN users 
               ON   users.id = phone_numbers.user_id AND birth_date >=$ageStart AND birth_date <= $ageEnd AND gender = 2
     GROUP BY user_id";
             