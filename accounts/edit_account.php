<?php

include "../config/db.php";


$id=$_GET['id'];


if(isset($_POST['update']))
{


$type=$_POST['account_type'];
$balance=$_POST['balance'];


mysqli_query($conn,

"UPDATE accounts SET

account_type='$type',

balance='$balance'

WHERE account_id=$id");


header("location:view_account.php");


}


?>


<form method="POST">


<input name="account_type"
placeholder="Account Type">


<input name="balance"
placeholder="Balance">


<button name="update">

Update

</button>


</form>