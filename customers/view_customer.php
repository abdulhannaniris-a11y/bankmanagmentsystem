<?php

include "../config/db.php";

include "../includes/header.php";

include "../includes/navbar.php";


$result=mysqli_query($conn,
"SELECT * FROM customers");

?>


<div class="container mt-5">


<h2>Customers</h2>


<table class="table table-bordered">


<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>

</tr>


<?php

while($row=mysqli_fetch_assoc($result))

{


?>

<tr>

<td>
<?php echo $row['customer_id']; ?>
</td>


<td>
<?php echo $row['name']; ?>
</td>


<td>
<?php echo $row['email']; ?>
</td>


<td>

<a class="btn btn-danger"
href="delete_customer.php?id=<?php echo $row['customer_id']; ?>">

Delete

</a>


</td>


</tr>


<?php

}

?>


</table>


</div>