<?php

function db_query($query){
    global $connection;
    $db_query = mysqli_query($connection, $query);
    return $db_query;
}


function db_fetch_data($query, $table){
    global $connection;
    $db_data = db_query($query." ".$table);
    return $db_data;

}


// User Section
function users_data(){
    $all_users = db_fetch_data("select * from", "users");
    return $all_users;

}