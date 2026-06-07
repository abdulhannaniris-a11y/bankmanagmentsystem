<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "bank_db"
);

if(!$conn)
{
    die("Connection Failed");
}

?>