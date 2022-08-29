<?php
function get_films(){
global $connect;
$result = mysqli_query($connect, "SELECT * FROM films ORDER BY RAND() LIMIT 3;");
 $films = mysqli_fetch_all($result, MYSQLI_ASSOC);
return $films;
}

function rand_film(){
global $connect;
$result = mysqli_query($connect, "SELECT * FROM films ORDER BY RAND() LIMIT 1;");
 $films = mysqli_fetch_all($result, MYSQLI_ASSOC);
return $films;
}