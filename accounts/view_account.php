<?php

include "../config/db.php";

include "../includes/header.php";
include "../includes/navbar.php";


$result=mysqli_query($conn,

"SELECT accounts.*,customers.name

FROM accounts

JOIN customers

ON accounts.customer_id=customers.customer_id");


?>


<div class="container mt-5">


<h2>Accounts</h2>


<table class="table table-bordered">


<tr>

<th>ID</th>
<th>Customer</th>
<th>Number</th>
<th>Type</th>
<th>Balance</th>
<th>Action</th>

</tr>


<?php

while($row=mysqli_fetch_assoc($result))
{

?>


<tr>


<td><?php echo $row['account_id']; ?></td>


<td><?php echo $row['name']; ?></td>


<td><?php echo $row['account_number']; ?></td>


<td><?php echo $row['account_type']; ?></td>


<td><?php echo $row['balance']; ?></td>


<td>

<a class="btn btn-danger"
href="delete_account.php?id=<?php echo $row['account_id']; ?>">

Delete

</a>

</td>


</tr>


<?php } ?>


</table>


</div>