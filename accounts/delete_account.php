<?php

include "../config/db.php";


$id=$_GET['id'];


mysqli_query($conn,

"DELETE FROM accounts

WHERE account_id=$id");


header("location:view_account.php");


?>