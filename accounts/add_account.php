<?php

include "../config/db.php";

include "../includes/header.php";
include "../includes/navbar.php";


if(isset($_POST['save']))
{


$customer=$_POST['customer_id'];
$number=$_POST['account_number'];
$type=$_POST['account_type'];
$balance=$_POST['balance'];


mysqli_query($conn,

"INSERT INTO accounts
(customer_id,account_number,account_type,balance)

VALUES

('$customer','$number','$type','$balance')");


echo "<script>alert('Account Added')</script>";

}


$customers=mysqli_query($conn,
"SELECT * FROM customers");


?>


<div class="container mt-5">


<h2>Add Account</h2>


<form method="POST">


<select class="form-control mb-2"
name="customer_id">


<option>Select Customer</option>


<?php

while($c=mysqli_fetch_assoc($customers))
{

?>


<option value="<?php echo $c['customer_id']; ?>">

<?php echo $c['name']; ?>

</option>


<?php } ?>


</select>



<input class="form-control mb-2"
name="account_number"
placeholder="Account Number">



<input class="form-control mb-2"
name="account_type"
placeholder="Saving / Current">



<input class="form-control mb-2"
name="balance"
placeholder="Balance">



<button class="btn btn-primary"
name="save">

Save

</button>


</form>


</div>