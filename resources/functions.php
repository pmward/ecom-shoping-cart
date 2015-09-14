<?php

function redirect() {
    
    header("Location: $location ");

}

function query() {
    
    global $connection;
    return mysqli_query($connection, $sql);
}


function confirm($result) {
    
    global $connection;
    
    if(!$result) {
        die("QUERY FAILED " . mysqli_error($connection));
    
    }
}


function escape_string($string) {
    
    global $connection;
    return mysqli_query($connection, $string);
}


function fetch_array($result) {
    
    return mysqli_fetch_array($result)

}
    


}

?>
