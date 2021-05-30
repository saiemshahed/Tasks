<?php

include_once ("config.php");

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new  Exception("Can not connect to database");
}else{
    echo "connected";
    //databas query
    //INSERT INTO  tasks(task,date) VALUES('Do Something','2021-02-17');
    //echo  mysqli_query($connection,"INSERT INTO  tasks(task,date) VALUES('Do Something','17/02/2021')");
//    $result=mysqli_query($connection,"SELECT * FROM  tasks");
//    while ($data=mysqli_fetch_array($result)){
//        echo "<pre>";
//        print_r ($data);
//
//        echo "</pre>";
//    }
//    mysqli_query($connection,'DELETE FROM tasks');
    mysqli_close($connection);

}