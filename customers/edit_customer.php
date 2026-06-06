<?php

include "../config/db.php";

include "../includes/header.php";
include "../includes/navbar.php";


$id = $_GET['id'];


$result = mysqli_query($conn,
"SELECT * FROM customers WHERE customer_id=$id");


$row = mysqli_fetch_assoc($result);



if(isset($_POST['update']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];


mysqli_query($conn,
"UPDATE customers SET

name='$name',
email='$email',
phone='$phone',
address='$address'

WHERE customer_id=$id");


header("location:view_customer.php");

}


?>


<div class="container mt-5">


<h2>Edit Customer</h2>


<form method="POST">


<input class="form-control mb-2"
name="name"
value="<?php echo $row['name']; ?>">


<input class="form-control mb-2"
name="email"
value="<?php echo $row['email']; ?>">


<input class="form-control mb-2"
name="phone"
value="<?php echo $row['phone']; ?>">


<textarea class="form-control mb-2"
name="address">

<?php echo $row['address']; ?>

</textarea>



<button class="btn btn-success"
name="update">

Update

</button>


</form>


</div>